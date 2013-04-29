<?php /* Smarty version Smarty-3.0.6, created on 2013-04-29 19:23:57
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2145539591517eacad48cd96-72790120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1367255970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2145539591517eacad48cd96-72790120',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
						
							<?php if ($_smarty_tpl->getVariable('taglist')->value){?>
							<h2>Tags</h2>
							<ul>

							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('taglist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
								<li><a href="?tag=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
							<?php }} ?>
							</ul>
							<?php }?>
						
							<?php if ($_smarty_tpl->getVariable('taglist')->value){?>
							<h2>Kalender</h2>
							<ul class="kalender">				
								<li><a href="?month=1">Januar		<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[1]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[1];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=2">Februar		<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[2]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[2];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=3">Mars 		<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[3]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[3];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=4">April 		<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[4]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[4];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=5">Mai 			<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[5]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[5];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=6">Juni 		<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[6]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[6];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=7">Juli 		<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[7]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[7];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=8">Agust 		<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[8]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[8];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=9">September 	<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[9]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[9];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=10">Oktober 	<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[10]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[10];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=11">November 	<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[11]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[11];?>
)<?php }else{ ?>(0)<?php }?></a></li>
								<li><a href="?month=12">Desember 	<?php if ($_smarty_tpl->getVariable('calendar_widget')->value[12]>=1){?>(<?php echo $_smarty_tpl->getVariable('calendar_widget')->value[12];?>
)<?php }else{ ?>(0)<?php }?></a></li>
							
							</ul>
							<?php }?>

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
