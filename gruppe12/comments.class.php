<?php
	/* 			Comment Class 
	 * 		Container for Comment-objektker
	 */
	
	class Comments {
		//Instansevariabel for ivaretaelse av objektene
		public $comments;	
	
		//Ingen instansemuligheter for konstruktøren
		public function __construct(){}

		//Fyller opp instansevariabelen med comments-objekter fra databasen.
		public function loadCommentsFromArticle($article_id, $db){
			
			require_once ('auth.php');
			require_once('comment.class.php');
			$article_id = $db->real_escape_string($article_id);
			$resultat = $db->query("SELECT c.id, c.article_id, c.user_id, u.brukernavn, c.comment, c.timestamp, c.ip FROM comments c INNER JOIN users u ON c.user_id = u.id WHERE c.article_id = $article_id ");
			
			while($row = $resultat->fetch_array())
			{
				$comment = new Comment($row["id"], $row["article_id"], $row["user_id"], $row["brukernavn"], $row["comment"], $row["timestamp"], $row["ip"]);
				$this->comments[] = $comment;
			}
			return $this->comments;
		}
		
		//Sletter gitt kommentar fra databasen
		public function deleteComment($id, $db){
			if($db->real_escape_string($_SESSION['rolle']) == 1){
				$id = $db->real_escape_string($id);
				$resultat = $db->query("DELETE FROM comments WHERE ID = $id");
			}
		}
		
		//Legger til kommentar i databasen
		public function addComment($commentUserId, $commentContent, $articleId, $db){
			if($db->real_escape_string($_SESSION['bruker'])){
				$article_id = $db->real_escape_string($article_id);
				$commentUserId = $db->real_escape_string($commentUserId);
				$commentContent = $db->real_escape_string($commentContent);
				$ip = $db->real_escape_string($_SERVER['REMOTE_ADDR']);
				
				$db->query("INSERT INTO comments (article_id, user_id, comment, ip) VALUES($articleId, $commentUserId, '$commentContent', '$ip')");
			}
		}


	}
	

?>