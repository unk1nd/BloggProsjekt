<?php /* Smarty version Smarty-3.0.6, created on 2013-04-25 19:28:22
         compiled from "./templates/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:332507717517967b6c023f4-62652624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '901768921e85f99024a7d90d68268d94d78b9fc0' => 
    array (
      0 => './templates/reset.tpl',
      1 => 1366910042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '332507717517967b6c023f4-62652624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
				<div class="post">
						<h2 class="title"><a href="#">Reset</a></h2>
						<div class="entry">
							<div class="loginform">
								<form method='post' action='doReset.php'><br />
									<label>Epost:</label><br /><input type='text' name='epost' size='35' /><br />
									<input type='submit' value='Send nytt passord på mail' style='width:160px;' /><br />
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>