{include file="header.tpl"}
		
					<div class="post">
						<h2 class="title"><a href="#">{$brukernavn}</a></h2>
						<div class="entry">
							<img class="profilavatar" src="imggen.php?type=profil&id={$bilde_id}" alt="avatar"/>
							<div class="profil">
								
								<strong>Navn:</strong> {$fornavn} {$etternavn} <br />
								<strong>Brukernavn:</strong> {$brukernavn} <br />
								<strong>Epost:</strong> {$epost} <br/>
								
							</div>
						</div>
					</div>
					<div class="profilmeny">
						{$brukerpanel}
						
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
		
{include file="footer.tpl"}