<?php /* Smarty version Smarty-3.0.6, created on 2013-04-29 16:26:40
         compiled from "./templates/registrer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1896932416517e83201f0624-64660016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '273ca0657bc2ca81dcdeab719daa7f693e34a1a2' => 
    array (
      0 => './templates/registrer.tpl',
      1 => 1367242903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1896932416517e83201f0624-64660016',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
		
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
		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>