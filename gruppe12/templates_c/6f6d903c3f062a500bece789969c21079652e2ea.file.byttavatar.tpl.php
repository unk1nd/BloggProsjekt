<?php /* Smarty version Smarty-3.0.6, created on 2013-04-28 15:34:20
         compiled from "./templates/byttavatar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32302490517d255ca75b90-48267877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f6d903c3f062a500bece789969c21079652e2ea' => 
    array (
      0 => './templates/byttavatar.tpl',
      1 => 1367156057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32302490517d255ca75b90-48267877',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
				<div class="post">
						<h2 class="title"><a href="#">Bytt Avatar</a></h2>
						<div class="entry">
							<div class="loginform">
								<form action="doByttavatar.php" method="post" enctype="multipart/form-data">
									<label for="file">Filename:</label>
									<input type="file" name="file" id="file"><br>
									<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
									<input class="success_button" type="submit" name="submit" value="Bytt">
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


