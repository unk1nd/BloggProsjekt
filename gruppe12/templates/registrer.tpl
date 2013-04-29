{include file="header.tpl"}
		
		
					<div class="post">
						<h2 class="title"><a href="#">Registrer</a></h2>
						<div class="entry">
							<div class="loginform">
								<form method='post' action='doRegistrer.php'><br />
									<label>Fornavn:</label><br /><input type='text' name='fornavn' size='25' /><br />
									<label>Etternavn:</label><br /><input type='text' name='etternavn' size='25' /><br />
									<label>Epost:</label><br /><input type='text' name='epost' size='25' /><br />
									
									<label>Brukernavn:</label><br /><input type='text' name='username' size='25' /><br />
									<label>Passord:</label><br /><input type='password' name='password' size='25' /><br />
									<label>Gjenta Passord:</label><br /><input type='password' name='password2' size='25' /><br /><br />
									
									Skriv inn:<p>"kittens go"</p>
									<label>Antibot:</label><br /><input type='text' name='antibot' size='25' /><br />
									
									<input type='submit' value='Registrer' style='width:120px;' /><br />
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
		
{include file="footer.tpl"}