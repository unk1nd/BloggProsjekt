{include file="header.tpl"}
		
				<div class="post">
						<h2 class="title"><a href="#">Bytt Avatar</a></h2>
						<div class="entry">
							<div class="loginform">
								<form action="doByttavatar.php" method="post" enctype="multipart/form-data">
									<label for="file">Filename:</label>
									<input type="file" name="file" id="file"><br>
									<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
									<input class="success_button" type="submit" name="submit" value="Bytt">
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

{include file="footer.tpl"}


