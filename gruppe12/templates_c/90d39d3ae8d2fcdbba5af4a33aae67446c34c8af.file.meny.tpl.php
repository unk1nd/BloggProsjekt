<?php /* Smarty version Smarty-3.0.6, created on 2013-04-28 16:21:47
         compiled from "./templates/meny.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110423807517d307b909bc1-23263000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90d39d3ae8d2fcdbba5af4a33aae67446c34c8af' => 
    array (
      0 => './templates/meny.tpl',
      1 => 1367158507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110423807517d307b909bc1-23263000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Top meny -->
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li><a href="index.php">Blogg</a></li>
				<?php echo $_smarty_tpl->getVariable('session_meny')->value;?>

			</ul>
		</div>
		<!-- end #menu -->
	</div>