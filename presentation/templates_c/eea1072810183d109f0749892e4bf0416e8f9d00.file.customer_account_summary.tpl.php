<?php /* Smarty version Smarty-3.1.13, created on 2013-04-05 10:53:20
         compiled from "D:\xampp\htdocs\website\presentation\templates\customer_account_summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22874515d2eb87cb1f1-28568935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea1072810183d109f0749892e4bf0416e8f9d00' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\customer_account_summary.tpl',
      1 => 1365151998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22874515d2eb87cb1f1-28568935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515d2eb8861ae5_11605613',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515d2eb8861ae5_11605613')) {function content_515d2eb8861ae5_11605613($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"customer_account_summary",'assign'=>"obj"),$_smarty_tpl);?>

<div class="account_summary">	
	<ul>
		<h2>Your account summary</h2>
	<li>Membership Since: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mRegisterDate;?>
</li><br />
	<li>Membership level: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mMemberLevel;?>
</li><br />
	<li>Last logon: <?php echo $_smarty_tpl->tpl_vars['obj']->value->mLastLoginDate;?>
 from <?php echo $_smarty_tpl->tpl_vars['obj']->value->mLastLoginIP;?>
</li>
	</ul> 
</div><?php }} ?>