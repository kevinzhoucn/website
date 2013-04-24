<?php /* Smarty version Smarty-3.1.13, created on 2013-04-04 09:19:27
         compiled from "D:\xampp\htdocs\website\presentation\templates\customer_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:756515d297f588aa2-72800049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2253ce23223b452a5d3c6b22324c29938050b930' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\customer_profile.tpl',
      1 => 1365059661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756515d297f588aa2-72800049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515d297f681bb1_87361152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515d297f681bb1_87361152')) {function content_515d297f681bb1_87361152($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"customer_profile",'assign'=>"obj"),$_smarty_tpl);?>

<div class="box">
	<div>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mLeftPanel, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<div class="profile_content">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mContent, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>