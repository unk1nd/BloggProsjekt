<?php /* Smarty version Smarty-3.0.6, created on 2013-04-26 16:02:45
         compiled from "./templates/profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:846146133517a8905756196-99129634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '939edfc761fa0337bde7ae4c35f0b15b3a018b46' => 
    array (
      0 => './templates/profil.tpl',
      1 => 1366984700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '846146133517a8905756196-99129634',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
					<div class="post">
						<h2 class="title"><a href="#"><?php echo $_smarty_tpl->getVariable('brukernavn')->value;?>
</a></h2>
						<div class="entry">
							<img class="profilavatar" src="imggen.php?type=profil&id=<?php echo $_smarty_tpl->getVariable('bilde_id')->value;?>
" alt="avatar"/>
							<div class="profil">
								
								<strong>Navn:</strong> <?php echo $_smarty_tpl->getVariable('fornavn')->value;?>
 <?php echo $_smarty_tpl->getVariable('etternavn')->value;?>
 <br />
								<strong>Brukernavn:</strong> <?php echo $_smarty_tpl->getVariable('brukernavn')->value;?>
 <br />
								<strong>Epost:</strong> <?php echo $_smarty_tpl->getVariable('epost')->value;?>
 <br/>
								
							</div>
						</div>
					</div>
					<div class="profilmeny">
						<?php echo $_smarty_tpl->getVariable('brukerpanel')->value;?>

						
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>