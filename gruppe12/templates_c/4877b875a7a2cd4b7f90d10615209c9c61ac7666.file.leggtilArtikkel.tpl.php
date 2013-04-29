<?php /* Smarty version Smarty-3.0.6, created on 2013-04-28 16:41:24
         compiled from "./templates/leggtilArtikkel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1131562353517d3514e3ea91-98286935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4877b875a7a2cd4b7f90d10615209c9c61ac7666' => 
    array (
      0 => './templates/leggtilArtikkel.tpl',
      1 => 1367159981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1131562353517d3514e3ea91-98286935',
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
								<form method='post' action='doLeggtilArtikkel.php' enctype="multipart/form-data"><br />
									<label>Tittel:</label><br /><input class="input_style" type='text' name='tittel' size='25' /><br />
									<label>Tags:</label><br /><input class="input_style" type='text' name='tags' size='25' /><br />
									
									<label for="file">Artikkel bilde:</label><br />
									<input type="file" name="file" id="file"><br /><br />
									<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
									
									<label>Tekst:</label><br />
									<textarea id='writeLong' name='content'></textarea><br />
									<script language="JavaScript">generate_wysiwyg('writeLong');</script>
									
									<input class="success_button" type='submit' value='Legg til' /><br />
								</form>
							</div>
							
						</div>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>