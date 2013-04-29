<?php /* Smarty version Smarty-3.0.6, created on 2013-04-28 15:59:50
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1881929034517d2b56032359-15194951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1367156398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881929034517d2b56032359-15194951',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
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

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>