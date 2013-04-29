{include file="header.tpl"}
		
		
					<div class="post">
						<h2 class="title"><a href="?vis={$article_id}">{$article_title}</a></h2>
						<p class="meta">Posted by <a href="profil.php?id={$article_user_id}">{$article_brukernavn}</a> on {$article_timestamp}
							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments ({$article_comment_count})</a> Visninger: {$article_hits} </p>
							
						<div class="entry">
							<p><img src="imggen.php?id={$article_id}" width="800" height="300" alt="" /></p>
							{$article_content}
							<hr/>
							<h3>Kommentarer</h3>
							
							{if !empty($sessionname)}
							<div class="add_comment">
							<h4>Innlogget som {$sessionname}</h4>
							<form method="POST" action=" ">
							<textarea name="comment_content" placeholder="Skriv inn din kommentar i dette tekstfeltet"></textarea>
							<input class="success_button" type="submit" name="add_comment" value="Send inn">
							</form>
							</div>
							{/if}
							
							
							{section name=i loop=$comment_id}
						
								<div class="comment">
								<span class="admin_box"><a href="?vis={$article_id}&DELETE={$comment_id[i]}">x</a></span>
								<img class="comment_avatar" src="imggen.php?id={$comment_userid[i]}&type=profil" />
								<h4><a href="profil.php?id={$comment_userid[i]}">{$comment_username[i]}</a></h4>
								<h5>{$comment_date[i]}</h5>
								<p>{$comment_comment[i]}</p>
								</div>
								
								{sectionelse}
								<div class="comment">
								<p>Ingen kommentarer</p>
								</div>
								
							{/section}
							


						
							
							
								

						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
		
{include file="footer.tpl"}