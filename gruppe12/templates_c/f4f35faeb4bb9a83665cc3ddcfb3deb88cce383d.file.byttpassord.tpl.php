<?php /* Smarty version Smarty-3.0.6, created on 2013-04-28 15:34:49
         compiled from "./templates/byttpassord.tpl" */ ?>
<?php /*%%SmartyHeaderCode:673073861517d257923b018-11805806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f35faeb4bb9a83665cc3ddcfb3deb88cce383d' => 
    array (
      0 => './templates/byttpassord.tpl',
      1 => 1367156066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '673073861517d257923b018-11805806',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
				<div class="post">
						<h2 class="title"><a href="#">Bytt Passord</a></h2>
						<div class="entry">
							<div class="loginform">
								<form method='post' action='doByttpassord.php'><br />
									<label>Passord:</label><br /><input type='password' name='pass1' size='35' /><br />
									<label>Bekreft Passord:</label><br /><input type='password' name='pass2' size='35' /><br />
									<input type='submit' class="success_button" value='Bytt' style='width:100px;' /><br />
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>