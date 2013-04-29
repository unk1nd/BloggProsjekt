{include file="header.tpl"}
		
		
					{foreach from=$articles item=i}
						<div class="post">
							<h2 class="title"><a href="?vis={$i.id}">{$i.title}</a></h2>
							<p class="meta">Posted by <a href="profil.php?id={$i.user_id}">{$i.brukernavn}</a> on {gmdate("d M Y", $i.timestamp)}
								&nbsp;&bull;&nbsp; <a href="?vis={$i.id}" class="comments">Comments ({$i.comment_count})</a> &nbsp;&bull;&nbsp; <a href="?vis={$i.id}" class="permalink">Hele artikkelen</a> 
								{if $smarty.session.rolle == 1}
								<a href="editArtikkel.php?id={$i.id}"><img src="images/file_edit.png" class="admin_icon" /></a>
								<a href="javascript:if(confirm('Vil du virkelig slette?')) window.location='editArtikkel.php?id={$i.id}&do=slett';"><img src="images/file_delete.png" class="admin_icon" /></a>
								
								{/if}</p>
							<div class="entry">
								<p><img src="imggen.php?id={$i.id}" width="800" height="300" alt="" /></p>
								{$i.content}
							</div>
						</div>
					{/foreach}
					<div style="clear: both;">&nbsp;</div>
				</div>
		
{include file="footer.tpl"}