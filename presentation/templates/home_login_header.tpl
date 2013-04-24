{* home_login_header.tpl *}
{load_presentation_object filename="home_login_header" assign="obj"}
{* Start *}
<div>    
    <a href="index.php" class="logo">
        <img src="{$obj->mSiteURL}images/logo.png" alt={#site_logo#} />
    </a>
    
    {if not $obj->mCustomerLogged}
        <div>
            <ul class="header_left">
                <li><a href='{$obj->mLoginURL}'>{#sign_in#}</a></li>
                <li><a href='register-customer'>{#sign_up#}</a></li>
            </ul>
            <ul class="header_nav">
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_01#}</a></li>
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_02#}</a></li>
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_03#}</a></li>
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_04#}</a></li>
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_05#}</a></li>
            </ul>
        </div>
    {else}
        <div>
            <ul class="header_left">
                <li>
                   <a href={$obj->mAccountProfileURL}>{#sign_welcome#} {$obj->mCustomerName}</a>                   
                </li>
                <li>
                   <a>{#user_earning#}0.001</a>                   
                </li>
                <li><a href='{$obj->mLogoutURL}'>{#sign_out#}</a></li>
            </ul>
            <ul class="header_nav">
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_01#}</a></li>
                <li><a href='{$obj->mLinkAccountADS}'>{#nav_bar_02#}</a></li>
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_03#}</a></li>
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_04#}</a></li>
                <li><a href='{$obj->mSiteURL}'>{#nav_bar_05#}</a></li>
            </ul>
        </div>
    {/if}
</div>
{* End *}