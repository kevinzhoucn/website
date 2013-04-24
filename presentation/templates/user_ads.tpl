{* user_ads.tpl *}
{load_presentation_object filename="user_ads" assign="obj"}
{* Start *}
<div class="user_ads" style="width:960px;float:left;">
	<h2 style="margin-left:40px;">Daily ADS:</h2>    
	{include file = "user/daily_ads.tpl" mUserAdsList = $obj->mADSDaily }
	<h2 style="margin-left:40px;">Fixed ADS:</h2>    
	{include file = "user/daily_ads.tpl" mUserAdsList = $obj->mADSFixed }	
</div>
{* End *}