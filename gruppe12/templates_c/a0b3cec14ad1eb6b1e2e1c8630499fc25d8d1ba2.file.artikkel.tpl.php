<?php /* Smarty version Smarty-3.0.6, created on 2013-04-29 17:33:13
         compiled from "./templates/artikkel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2035058708517e92b9688db8-11816568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0b3cec14ad1eb6b1e2e1c8630499fc25d8d1ba2' => 
    array (
      0 => './templates/artikkel.tpl',
      1 => 1367249535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2035058708517e92b9688db8-11816568',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
		
					<div class="post">
						<h2 class="title"><a href="?vis=<?php echo $_smarty_tpl->getVariable('article_id')->value;?>
"><?php echo $_smarty_tpl->getVariable('article_title')->value;?>
</a></h2>
						<p class="meta">Posted by <a href="profil.php?id=<?php echo $_smarty_tpl->getVariable('article_user_id')->value;?>
"><?php echo $_smarty_tpl->getVariable('article_brukernavn')->value;?>
</a> on <?php echo $_smarty_tpl->getVariable('article_timestamp')->value;?>

							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (<?php echo $_smarty_tpl->getVariable('article_comment_count')->value;?>
)</a> Visninger: <?php echo $_smarty_tpl->getVariable('article_hits')->value;?>
 </p>
							
						<div class="entry">
							<p><img src="imggen.php?id=<?php echo $_smarty_tpl->getVariable('article_id')->value;?>
" width="800" height="300" alt="" /></p>
							<?php echo $_smarty_tpl->getVariable('article_content')->value;?>

							<hr/>
							<h3>Kommentarer</h3>
							
							<?php if (!empty($_smarty_tpl->getVariable('sessionname',null,true,false)->value)){?>
							<div class="add_comment">
							<h4>Innlogget som <?php echo $_smarty_tpl->getVariable('sessionname')->value;?>
</h4>
							<form method="POST" action=" ">
							<textarea name="comment_content" placeholder="Skriv inn din kommentar i dette tekstfeltet"></textarea>
							<input class="success_button" type="submit" name="add_comment" value="Send inn">
							</form>
							</div>
							<?php }?>
							
							
							<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('comment_id')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
						
								<div class="comment">
								<span class="admin_box"><a href="?vis=<?php echo $_smarty_tpl->getVariable('article_id')->value;?>
&DELETE=<?php echo $_smarty_tpl->getVariable('comment_id')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
">x</a></span>
								<img class="comment_avatar" src="imggen.php?id=<?php echo $_smarty_tpl->getVariable('comment_userid')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
&type=profil" />
								<h4><a href="profil.php?id=<?php echo $_smarty_tpl->getVariable('comment_userid')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><?php echo $_smarty_tpl->getVariable('comment_username')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</a></h4>
								<h5><?php echo $_smarty_tpl->getVariable('comment_date')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</h5>
								<p><?php echo $_smarty_tpl->getVariable('comment_comment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</p>
								</div>
								
								<?php endfor; else: ?>
								<div class="comment">
								<p>Ingen kommentarer</p>
								</div>
								
							<?php endif; ?>
							


						
							
							
								

						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
		
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>