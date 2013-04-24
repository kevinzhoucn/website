<?php /* Smarty version Smarty-3.1.13, created on 2013-03-26 02:36:25
         compiled from "D:\xampp\htdocs\website\presentation\templates\customer_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39935150fb99d1b4f5-98955766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57a8bf330e13fd28647d2e7d287b55dc4fde1118' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\customer_login.tpl',
      1 => 1364260636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39935150fb99d1b4f5-98955766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5150fb99da39b0_30200520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5150fb99da39b0_30200520')) {function content_5150fb99da39b0_30200520($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"customer_login",'assign'=>"obj"),$_smarty_tpl);?>
<div class="box">  <p class="box-title">Login</p>  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToLogin;?>
">    <?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrorMessage){?><p class="error"><?php echo $_smarty_tpl->tpl_vars['obj']->value->mErrorMessage;?>
</p><?php }?>    <p>      <label for="email">E-mail address:</label>      <input type="text" maxlength="50" name="email" size="22"      value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEmail;?>
" />    </p>    <p>      <label for="password">Password:</label>      <input type="password" maxlength="50" name="password" size="22" />    </p>    <p>      <input type="submit" name="Login" value="Login" /> |      <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToRegisterCustomer;?>
">Register user</a>    </p>  </form></div><?php }} ?>