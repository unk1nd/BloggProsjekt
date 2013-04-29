<?php /* Smarty version Smarty-3.0.6, created on 2013-04-28 20:03:35
         compiled from "./templates/søk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2337671517d64778e14d2-51754777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84934c1065f3055c9530f2e42d44c04dc3b2a077' => 
    array (
      0 => './templates/søk.tpl',
      1 => 1367172148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2337671517d64778e14d2-51754777',
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
								<?php echo $_smarty_tpl->getVariable('resultat')->value;?>

							</div>
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>