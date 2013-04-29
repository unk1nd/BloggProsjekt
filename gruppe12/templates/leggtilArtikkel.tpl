{include file="header.tpl"}
		
				<div class="post">
						<h2 class="title"><a href="#">Legg til artikkel</a></h2>
						<div class="entry">
							<div class="leggtilartikkel">
								<form method='post' action='doLeggtilArtikkel.php' enctype="multipart/form-data"><br />
									<label>Tittel:</label><br /><input class="input_style" type='text' name='tittel' size='25' /><br />
									<label>Tags:</label><br /><input class="input_style" type='text' name='tags' size='25' /><br />
									
									<label for="file">Artikkel bilde:</label><br />
									<input type="file" name="file" id="file"><br /><br />
									<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
									
									<label>Tekst:</label><br />
									<textarea id='writeLong' name='content'></textarea><br />
									<script language="JavaScript">generate_wysiwyg('writeLong');</script>
									
									<input class="success_button" type='submit' value='Legg til' /><br />
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

{include file="footer.tpl"}