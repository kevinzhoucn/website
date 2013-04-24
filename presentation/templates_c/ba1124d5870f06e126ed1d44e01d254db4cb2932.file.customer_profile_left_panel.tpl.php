<?php /* Smarty version Smarty-3.1.13, created on 2013-04-04 10:58:54
         compiled from "D:\xampp\htdocs\website\presentation\templates\customer_profile_left_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18973515d297f6a49a7-77445527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba1124d5870f06e126ed1d44e01d254db4cb2932' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\customer_profile_left_panel.tpl',
      1 => 1365065932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18973515d297f6a49a7-77445527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515d297f6e7310_01284965',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515d297f6e7310_01284965')) {function content_515d297f6e7310_01284965($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"customer_profile_left_panel",'assign'=>"obj"),$_smarty_tpl);?>

 <div class="profile_left_panel">
 	<ul>
 		<li><a href=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkAccountSummary;?>
>Accoutn Summary</a></li>
 		<li><a href=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkAccountEdit;?>
>Accoutn Edit</a></li>
 		<li><a href=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkEarningStatus;?>
>Earning Status</a></li>
 		<li><a href=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkMyReferrals;?>
>My Referrals</a></li>
 	</ul>
 </div>

<?php }} ?>