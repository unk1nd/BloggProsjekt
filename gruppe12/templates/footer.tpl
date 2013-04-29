				<!-- slutt #content -->
				<div id="sidebar">
			
							<div class="sokefelt">
								<form method="post" action="search.php">
									<p><input type="text" size="15px" name="query"/>
									<input class="success_button" type="submit" value="Søk" name="completedsearch" /></p>
								</form>
							</div>
					
					
							<h2>Gruppe 12</h2>
							<p>Dette er bloggen til Gruppe12 i datafaget ITE1720 - Databaser og webapplikasjoner. Gruppen består av Krister Berntsen, Mikael Bendiksen og Lisa Marie Sørensen. Obligatorisk prosjektoppgave med karakter. Prosjektoppgaven sammen med etest teller 50% av karakteren i ITE1720.</p>
						
							{if $taglist}
							<h2>Tags</h2>
							<ul>

							{foreach from=$taglist item=i}
								<li><a href="?tag={$i}">{$i}</a></li>
							{/foreach}
							</ul>
							{/if}
						
							{if $taglist}
							<h2>Kalender</h2>
							<ul class="kalender">				
								<li><a href="?month=1">Januar		{if $calendar_widget[1] >= 1}({$calendar_widget[1]}){else}(0){/if}</a></li>
								<li><a href="?month=2">Februar		{if $calendar_widget[2] >= 1}({$calendar_widget[2]}){else}(0){/if}</a></li>
								<li><a href="?month=3">Mars 		{if $calendar_widget[3] >= 1}({$calendar_widget[3]}){else}(0){/if}</a></li>
								<li><a href="?month=4">April 		{if $calendar_widget[4] >= 1}({$calendar_widget[4]}){else}(0){/if}</a></li>
								<li><a href="?month=5">Mai 			{if $calendar_widget[5] >= 1}({$calendar_widget[5]}){else}(0){/if}</a></li>
								<li><a href="?month=6">Juni 		{if $calendar_widget[6] >= 1}({$calendar_widget[6]}){else}(0){/if}</a></li>
								<li><a href="?month=7">Juli 		{if $calendar_widget[7] >= 1}({$calendar_widget[7]}){else}(0){/if}</a></li>
								<li><a href="?month=8">Agust 		{if $calendar_widget[8] >= 1}({$calendar_widget[8]}){else}(0){/if}</a></li>
								<li><a href="?month=9">September 	{if $calendar_widget[9] >= 1}({$calendar_widget[9]}){else}(0){/if}</a></li>
								<li><a href="?month=10">Oktober 	{if $calendar_widget[10] >= 1}({$calendar_widget[10]}){else}(0){/if}</a></li>
								<li><a href="?month=11">November 	{if $calendar_widget[11] >= 1}({$calendar_widget[11]}){else}(0){/if}</a></li>
								<li><a href="?month=12">Desember 	{if $calendar_widget[12] >= 1}({$calendar_widget[12]}){else}(0){/if}</a></li>
							
							</ul>
							{/if}

				</div>
				<!-- slutt #sidebar -->
				
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- slutt #page -->
</div>
<div id="footer">
	<p><a href="#top">Gå til topp</a></p>
	<p>
		<a href="http://validator.w3.org/check?uri=referer">
			<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
		</a>
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
        	<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
    	</a>
    </p>
</div>
<!-- slutt #footer -->
</body>
</html>
