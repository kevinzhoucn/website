<?php /* Smarty version Smarty-3.1.13, created on 2013-04-17 11:14:49
         compiled from "D:\xampp\htdocs\website\presentation\templates\home_login_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19403514ffcbb449dd1-34306731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2956ea2ff106dea4f41c9785c66633c3e76ded75' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\home_login_header.tpl',
      1 => 1366190087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19403514ffcbb449dd1-34306731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_514ffcbb46e565_73815289',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_514ffcbb46e565_73815289')) {function content_514ffcbb46e565_73815289($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"home_login_header",'assign'=>"obj"),$_smarty_tpl);?>


<div>    
    <a href="index.php" class="logo">
        <img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
images/logo.png" alt=<?php echo $_smarty_tpl->getConfigVariable('site_logo');?>
 />
    </a>
    
    <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mCustomerLogged){?>
        <div>
            <ul class="header_left">
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLoginURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('sign_in');?>
</a></li>
                <li><a href='register-customer'><?php echo $_smarty_tpl->getConfigVariable('sign_up');?>
</a></li>
            </ul>
            <ul class="header_nav">
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_01');?>
</a></li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_02');?>
</a></li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_03');?>
</a></li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_04');?>
</a></li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_05');?>
</a></li>
            </ul>
        </div>
    <?php }else{ ?>
        <div>
            <ul class="header_left">
                <li>
                   <a href=<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAccountProfileURL;?>
><?php echo $_smarty_tpl->getConfigVariable('sign_welcome');?>
 <?php echo $_smarty_tpl->tpl_vars['obj']->value->mCustomerName;?>
</a>                   
                </li>
                <li>
                   <a><?php echo $_smarty_tpl->getConfigVariable('user_earning');?>
0.001</a>                   
                </li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLogoutURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('sign_out');?>
</a></li>
            </ul>
            <ul class="header_nav">
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_01');?>
</a></li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkAccountADS;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_02');?>
</a></li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_03');?>
</a></li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_04');?>
</a></li>
                <li><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteURL;?>
'><?php echo $_smarty_tpl->getConfigVariable('nav_bar_05');?>
</a></li>
            </ul>
        </div>
    <?php }?>
</div>
<?php }} ?>