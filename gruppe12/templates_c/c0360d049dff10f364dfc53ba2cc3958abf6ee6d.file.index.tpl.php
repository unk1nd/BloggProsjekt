<?php /* Smarty version Smarty-3.0.6, created on 2013-04-28 20:50:30
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1457041172517d6f763bdf90-25261333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1367174914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1457041172517d6f763bdf90-25261333',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
		
					<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('articles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
						<div class="post">
							<h2 class="title"><a href="?vis=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></h2>
							<p class="meta">Posted by <a href="profil.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['brukernavn'];?>
</a> on <?php echo gmdate("d M Y",$_smarty_tpl->tpl_vars['i']->value['timestamp']);?>

								&nbsp;&bull;&nbsp; <a href="?vis=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="comments">Comments (<?php echo $_smarty_tpl->tpl_vars['i']->value['comment_count'];?>
)</a> &nbsp;&bull;&nbsp; <a href="?vis=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="permalink">Hele artikkelen</a> 
								<?php if ($_SESSION['rolle']==1){?>
								<a href="editArtikkel.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><img src="images/file_edit.png" class="admin_icon" /></a>
								<a href="javascript:if(confirm('Vil du virkelig slette?')) window.location='editArtikkel.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&do=slett';"><img src="images/file_delete.png" class="admin_icon" /></a>
								
								<?php }?></p>
							<div class="entry">
								<p><img src="imggen.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" width="800" height="300" alt="" /></p>
								<?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>

							</div>
						</div>
					<?php }} ?>
					<div style="clear: both;">&nbsp;</div>
				</div>
		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>