{* customer_profile.tpl *}
{load_presentation_object filename="customer_profile" assign="obj"}
<div class="box">
	<div>
		{include file = $obj->mLeftPanel }
	</div>
	<div class="profile_content">
		{include file = $obj->mContent }
	</div>
</div>