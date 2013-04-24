<?php /* Smarty version Smarty-3.1.13, created on 2013-04-23 10:00:19
         compiled from "D:\xampp\htdocs\website\presentation\templates\home_front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196025146ba75941003-32862502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2404b9efc916147e5f52fdc76f41639e0766d1c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\home_front.tpl',
      1 => 1366703813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196025146ba75941003-32862502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5146ba75afad67_03427717',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5146ba75afad67_03427717')) {function content_5146ba75afad67_03427717($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"home_front",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title><?php echo $_smarty_tpl->getConfigVariable('site_title');?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
styles/website.css" />
  </head>
  <body>
    <div id="doc" class="yui-t2">
      <div id="bd">
        <div id="yui-main">
          <div class="yui-b">
            <div id="header" class="yui-g">
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mHomeHearder, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <div id="navigation" class="yui-g">
                
            </div>
            <div id="contents" class="yui-g">
              <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mHomeMain, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
          </div>
         </div>
         <div class="yui-b">
           
        </div>
      </div>
    </div>
  </body>
</html><?php }} ?>