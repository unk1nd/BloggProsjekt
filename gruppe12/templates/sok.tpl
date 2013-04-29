{include file="header.tpl"}
		
				<div class="post">
						<h2 class="title"><a href="#">Søkeresultat</a></h2>
						<div class="entry">
							<p>Søkemotoren fant {$antalltreff} treff på "{$sokeord}".</p>
							<div class="treff">
								{foreach from=$resultat item=i}
								<img class="sokimg" src="imggen.php?id={$i.id}" /><br />
								<a href="index.php?vis={$i.id}">{$i.title}</a><br />
								{substr($i.content,0,100)}
								<br /><br />
								{/foreach}
							</div>
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

{include file="footer.tpl"}