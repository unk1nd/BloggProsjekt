<?php /* Smarty version Smarty-3.0.6, created on 2013-04-29 14:31:13
         compiled from "./templates/sok.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1808726000517e681181c8d4-09587078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bfe8201755a0354e571692e2777d25d7248fa9b' => 
    array (
      0 => './templates/sok.tpl',
      1 => 1367238301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808726000517e681181c8d4-09587078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
				<div class="post">
						<h2 class="title"><a href="#">Søkeresultat</a></h2>
						<div class="entry">
							<p>Søkemotoren fant <?php echo $_smarty_tpl->getVariable('antalltreff')->value;?>
 treff på "<?php echo $_smarty_tpl->getVariable('sokeord')->value;?>
".</p>
							<div class="treff">
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resultat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
								<img class="sokimg" src="imggen.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" /><br />
								<a href="index.php?vis=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a><br />
								<?php echo substr($_smarty_tpl->tpl_vars['i']->value['content'],0,100);?>

								<br /><br />
								<?php }} ?>
							</div>
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>