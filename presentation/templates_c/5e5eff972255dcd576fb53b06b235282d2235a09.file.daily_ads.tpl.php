<?php /* Smarty version Smarty-3.1.13, created on 2013-04-23 09:53:26
         compiled from "D:\xampp\htdocs\website\presentation\templates\user\daily_ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26030516d12f092ea33-42223592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5eff972255dcd576fb53b06b235282d2235a09' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\user\\daily_ads.tpl',
      1 => 1366703594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26030516d12f092ea33-42223592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_516d12f093dae9_35521792',
  'variables' => 
  array (
    'mUserAdsList' => 0,
    'obj' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516d12f093dae9_35521792')) {function content_516d12f093dae9_35521792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?>

<?php echo smarty_function_load_presentation_object(array('filename'=>"user/daily_ads",'assign'=>"obj"),$_smarty_tpl);?>

<table style="margin:auto">
	<tbody>	
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mUserAdsList']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']%4==0){?>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['i']['first']){?>
				</tr>
			<?php }?>
			<tr style="margin:20px;">
		<?php }?>
		<td style="width:160px;">
			<p style="margin:2px 2px 10px 2px;">
			ADS Title, <?php echo $_smarty_tpl->tpl_vars['obj']->value->mTest;?>
, if it is too long, what happen in the page
			</p>
		    <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable('', null, 0);?>
		    
		    <?php if (($_smarty_tpl->tpl_vars['obj']->value->mSelectedADS==$_smarty_tpl->tpl_vars['mUserAdsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ads_id'])){?>
		      <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable("class=\"selected\"", null, 0);?>
		    <?php }?>
		      
		      <a <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
 href="<?php echo $_smarty_tpl->tpl_vars['mUserAdsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
" class="box-title" target="_blank" >
		        <?php echo $_smarty_tpl->tpl_vars['mUserAdsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
<?php echo $_smarty_tpl->tpl_vars['mUserAdsList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['description'];?>
if it is too long, what happen in the page
		      </a>
	    </td>
	    <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['last']){?>
	    	</tr>
	    <?php }?>
	<?php endfor; endif; ?>
	</tbody>
</table><?php }} ?>