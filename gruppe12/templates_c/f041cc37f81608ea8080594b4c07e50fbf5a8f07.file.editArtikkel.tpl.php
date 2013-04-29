<?php /* Smarty version Smarty-3.0.6, created on 2013-04-28 19:14:02
         compiled from "./templates/editArtikkel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297789555517d58da80a6b6-91216385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f041cc37f81608ea8080594b4c07e50fbf5a8f07' => 
    array (
      0 => './templates/editArtikkel.tpl',
      1 => 1367166883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297789555517d58da80a6b6-91216385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		
				<div class="post">
						<h2 class="title"><a href="#">Legg til artikkel</a></h2>
						<div class="entry">
							<div class="leggtilartikkel">
								<form method='post' action='doEditArtikkel.php' enctype="multipart/form-data"><br />
									<label>Tittel:</label><br /><input class="input_style" type='text' name='tittel' value="<?php echo $_smarty_tpl->getVariable('tittel')->value;?>
" size='25' /><br />
									<label>Tags:</label><br /><input class="input_style" type='text' name='tags' value="<?php echo $_smarty_tpl->getVariable('tags')->value;?>
" size='25' /><br />
									<input type="hidden" name="artikkelid" value="<?php echo $_smarty_tpl->getVariable('artikkelid')->value;?>
" />
									<label>Tekst:</label><br />
									<textarea id='writeLong' name='content'><?php echo $_smarty_tpl->getVariable('content')->value;?>
</textarea><br />
									<script language="JavaScript">generate_wysiwyg('writeLong');</script>
									
									<input class="success_button" type='submit' value='Oppdater' /><br />
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>