{include file="header.tpl"}
		
				<div class="post">
						<h2 class="title"><a href="#">Legg til artikkel</a></h2>
						<div class="entry">
							<div class="leggtilartikkel">
								<form method='post' action='doEditArtikkel.php' enctype="multipart/form-data"><br />
									<label>Tittel:</label><br /><input class="input_style" type='text' name='tittel' value="{$tittel}" size='25' /><br />
									<label>Tags:</label><br /><input class="input_style" type='text' name='tags' value="{$tags}" size='25' /><br />
									<input type="hidden" name="artikkelid" value="{$artikkelid}" />
									<label>Tekst:</label><br />
									<textarea id='writeLong' name='content'>{$content}</textarea><br />
									<script language="JavaScript">generate_wysiwyg('writeLong');</script>
									
									<input class="success_button" type='submit' value='Oppdater' /><br />
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

{include file="footer.tpl"}