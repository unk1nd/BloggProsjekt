<?php

	session_start();

	require_once ('auth.php');
	require_once ('count.php');
	require_once ('menyChecker.php');
	require_once('libs/Smarty.class.php');
	
	//Diverse "globale" variabler
	$sessionbrukernavn = $db->real_escape_string($_SESSION['bruker']);
	$visArtikkel = $db->real_escape_string($_GET['vis']);
	$sorterTags = $db->real_escape_string($_GET['tag']);
	$visKalender = $db->real_escape_string($_GET['month']);
	$deleteComment = $db->real_escape_string($_GET['DELETE']);
	
	//Starter smarty
	$smarty = new Smarty;
	//Setter inn noen sessions til smarty
	$smarty->assign('session_meny' , $menyinput);
	$smarty->assign('sessionname', $sessionbrukernavn);

	/*
	 * Pusher kalenderinformasjon til Smarty
	 */
	$resultat = $db->query("SELECT timestamp FROM articles");
	while($row = $resultat->fetch_array())
	{
		$monthNumber = gmdate("n", $row['timestamp']);
		for($i = 1; $i <= 12; $i++)
		{
			if($i == $monthNumber)
			{
				$calendar_widget[$i]++;
			}
			else
			{
				$calendar_widget[$i] = $calendar_widget[$i];
			}
		}	
	}
	$smarty->assign('calendar_widget' , $calendar_widget);





	/*
	 * Viser artikkel
	 */
	if(!empty($visArtikkel))
	{
		//Inkluderer OO-kommentarer
		include_once('comments.class.php');
		include_once('comment.class.php');
		$comments = new Comments();
		
		//POST-variabel som undersøker om noen har lyst til å legge til en kommentar		
		$addcomment = $_POST['add_comment'];
		
		//Om noen ønsker å legge til kommentar
		if(!empty($addcomment))
		{
			$commentContent = $_POST['comment_content'];
			$commentUserId = $_SESSION['id'];
			$comments->addComment($commentUserId, $commentContent, $visArtikkel, $db);
		}
		
		//Om noen ønsker å slette en kommentar
		if(!empty($deleteComment))
		{
			$comments->deleteComment($deleteComment, $db);
		}
		
		//Konstruerer kommentarobjektene
		$comments->loadCommentsFromArticle($visArtikkel, $db);
		//Ser igjennom objektene og konverterer dem til arrays lesbar av smarty
		foreach($comments->comments as $comment)
		{
			if (is_object($comment) )
			{
			$userid[] 			= $comment->getAuthorId();
			$id[] 				= $comment->getId();
			$username[] 		= $comment->getAuthorName();
			$comment_content[] 	= $comment->getComment();
			$ip[] 				= $comment->getIp();
			$date[] 			= $comment->getDate();
			}
		}
		$smarty->assign('comment_id' , $id);
		$smarty->assign('comment_userid' , $userid);
		$smarty->assign('comment_username' , $username);
		$smarty->assign('comment_comment' , $comment_content);
		$smarty->assign('comment_ip' , $ip);
		$smarty->assign('comment_date' , gmdate("d M Y", $date));
		
		//Sender informasjon om artikkel til smarty.
		$resultat = $db->query("SELECT a.id, a.user_id, u.brukernavn, (SELECT COUNT(*) FROM comments WHERE article_id = a.id) AS comment_count, a.title, a.content, a.tags, a.timestamp, a.hits FROM articles a INNER JOIN users u ON a.user_id = u.id WHERE a.id = $visArtikkel LIMIT 1");
		while($row = $resultat->fetch_array())
		{	
			$smarty->assign('article_id' , $row['id']);
			$smarty->assign('article_user_id' , $row['user_id']);
			$smarty->assign('article_brukernavn' , $row['brukernavn']);
			$smarty->assign('article_comment_count' , $row['comment_count']);
			$smarty->assign('article_title' , $row['title']);	
			$smarty->assign('article_content' , $row['content']);
			$smarty->assign('article_tags' , $row['tags']);
			$smarty->assign('article_timestamp' , gmdate("d M Y", $row['timestamp']));
			$smarty->assign('article_hits' , $row['hits']);
		}
		//Oppdaterer hits til databasen.
		getHits($visArtikkel, $db);		
		$smarty->display('artikkel.tpl');
	}

	/*
	 * Om ikke noe er angitt, så vises forsiden med artikler
	 */
	else 
	{
		//Om man har bestemt seg for å vise artikler med en bestemt tag Brukes denne spørringen
		if(!empty($sorterTags))
			$resultat = $db->query("SELECT a.id, a.user_id, u.brukernavn, (SELECT COUNT(*) FROM comments WHERE article_id = a.id) AS comment_count, a.title, a.content, a.image, a.tags, a.timestamp, a.hits FROM articles a INNER JOIN users u ON a.user_id = u.id WHERE a.tags LIKE '%$sorterTags%'");	
		//Om man har bestemt seg for å vise artikler med en bestemt måned Brukes denne spørringen
		else if(!empty($visKalender))
			$resultat = $db->query("SELECT a.id, a.user_id, u.brukernavn, (SELECT COUNT(*) FROM comments WHERE article_id = a.id) AS comment_count, a.title, a.content, a.image, a.tags, a.timestamp, a.hits FROM articles a INNER JOIN users u ON a.user_id = u.id WHERE MONTH(FROM_UNIXTIME(timestamp)) =  $visKalender ORDER BY timestamp DESC");
		//Ellers vises alt som normalt.
		else		
			$resultat = $db->query("SELECT a.id, a.user_id, u.brukernavn, (SELECT COUNT(*) FROM comments WHERE article_id = a.id) AS comment_count, a.title, a.content, a.image, a.tags, a.timestamp, a.hits FROM articles a INNER JOIN users u ON a.user_id = u.id ORDER BY timestamp DESC");
		//Looper igjennom og sender tags til smarty.
		while($row = $resultat->fetch_array())
		{
			$articles_array[] = $row;
			$tags_array[] = $row["tags"];
		}
		$smarty->assign('articles' , $articles_array);
		
		/*
		 * Genererer tags fra databasen til bruk i widget.
		 */
		$taglist = array();
		function addToTaglist($item)
		{			
			global $taglist;
			$taglist[] = "$item";
		}
		
		//Splitter tags og sender array av tags til smarty.
		for($i = 0; $i <= count($tags_array); $i++)
		{
			$explodedTags = explode(",", $tags_array[$i]);
			array_walk($explodedTags, 'addToTaglist');
		}
		$smarty->assign('taglist' , array_unique($taglist));
		
		$smarty->display('index.tpl'); 
	}
?>