<?php /* Smarty version Smarty-3.1.13, created on 2013-04-23 10:00:21
         compiled from "D:\xampp\htdocs\website\presentation\templates\user_ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26156516bc464ce0f40-97971146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '961fa60d75a27dbb0a9bbca605bed6577b19bc16' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\user_ads.tpl',
      1 => 1366703819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26156516bc464ce0f40-97971146',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516bc464d202c0_96176249',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516bc464d202c0_96176249')) {function content_516bc464d202c0_96176249($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"user_ads",'assign'=>"obj"),$_smarty_tpl);?>


<div class="user_ads" style="width:960px;float:left;">
	<h2 style="margin-left:40px;">Daily ADS:</h2>    
	<?php echo $_smarty_tpl->getSubTemplate ("user/daily_ads.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('mUserAdsList'=>$_smarty_tpl->tpl_vars['obj']->value->mADSDaily), 0);?>

	<h2 style="margin-left:40px;">Fixed ADS:</h2>    
	<?php echo $_smarty_tpl->getSubTemplate ("user/daily_ads.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('mUserAdsList'=>$_smarty_tpl->tpl_vars['obj']->value->mADSFixed), 0);?>
	
</div>
<?php }} ?>