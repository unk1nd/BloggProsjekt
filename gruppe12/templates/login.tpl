{include file="header.tpl"}
		
				<div class="post">
						<h2 class="title"><a href="#">Logg inn</a></h2>
						<div class="entry">
							<div class="loginform">
								<form method='post' action='doLogin.php'><br />
									<label>Brukernavn:</label><br /><input class="input_style" type='text' name='username' size='25' /><br />
									<label>Passord:</label><br /><input class="input_style" type='password' name='password' size='25' /><br /><br />
									<input class="success_button" type='submit' value='Logg inn' style='width:120px;' /><br />
								</form>
								<a href="registrer.php">Registrer</a><br />
								<a href="reset.php">Glemt passord</a>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

{include file="footer.tpl"}