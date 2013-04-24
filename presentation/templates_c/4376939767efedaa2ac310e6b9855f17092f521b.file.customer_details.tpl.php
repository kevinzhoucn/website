<?php /* Smarty version Smarty-3.1.13, created on 2013-04-10 12:01:51
         compiled from "D:\xampp\htdocs\website\presentation\templates\customer_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282851510952535255-68838426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4376939767efedaa2ac310e6b9855f17092f521b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\website\\presentation\\templates\\customer_details.tpl',
      1 => 1365585878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282851510952535255-68838426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515109526096f8_49733877',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515109526096f8_49733877')) {function content_515109526096f8_49733877($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'D:\\xampp\\htdocs\\website/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"customer_details",'assign'=>"obj"),$_smarty_tpl);?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToAccountDetails;?>
">
  <h2>Please enter your details:</h2>
  <table class="customer-table">

  <tr>
    <td>E-mail Address:</td>
    <td>
      <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEmail;?>
"
       <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditMode){?>readonly="readonly"<?php }?> size="32" />
      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEmailAlreadyTaken){?>
      <p class="error">A user with that e-mail address already exists.</p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEmailError){?>
      <p class="error">You must enter an e-mail address.</p>
      <?php }?>
    </td>
  </tr>
  <tr>
    <td>Name:</td>
    <td>
      <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mName;?>
" size="32" />
      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mNameError){?>
      <p class="error">You must enter your name.</p>
      <?php }?>
    </td>
  </tr>
  <tr>
    <td>Password:</td>
    <td>
      <input type="password" name="password" size="32" />
      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mPasswordError){?>
      <p class="error">You must enter a password.</p>
      <?php }?>
    </td>
  </tr>
  <tr>
    <td>Re-enter Password:</td>
    <td>
      <input type="password" name="passwordConfirm" size="32" />
      <?php if ($_smarty_tpl->tpl_vars['obj']->value->mPasswordConfirmError){?>
      <p class="error">You must re-enter your password.</p>
      <?php }elseif($_smarty_tpl->tpl_vars['obj']->value->mPasswordMatchError){?>
      <p class="error">You must re-enter the same password.</p>
      <?php }?>
    </td>
  </tr>

  <?php if ($_smarty_tpl->tpl_vars['obj']->value->mEditMode){?>
  <tr>
    <td>Address 1:</td>

      <td>
        <input type="text" name="address_1" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAddress1;?>
"
         size="32" />
      </td>
    </tr>
    <tr>
      <td>Address 2:</td>
      <td>
        <input type="text" name="address_2" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mAddress2;?>
"
         size="32" />
      </td>
    </tr>
      <tr>
    <td>City:</td>

      <td>
        <input type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCity;?>
"
         size="32" />
      </td>
    </tr>
    <tr>
      <td>Region:</td>
      <td>
        <input type="text" name="region" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mRegion;?>
"
         size="32" />
      </td>
    </tr>
    <tr>
      <td>Postal Code:</td>
      <td>
        <input type="text" name="postal_code" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPostalCode;?>
"
         size="32" />
      </td>
    </tr>
        <tr>
      <td>Country:</td>
      <td>
        <input type="text" name="country" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mCountry;?>
"
         size="32" />
      </td>
    </tr>
    <tr>
      <td>Paypal:</td>
      <td>
        <input type="text" name="paypal" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mPaypal;?>
"
         size="32" />
      </td>
    </tr>
    <?php }?>

  </table>
  <input type="submit" name="sended" value="Confirm" /> |
  <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToCancelPage;?>
">Cancel</a>
</form><?php }} ?>