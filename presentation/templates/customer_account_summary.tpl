{* customer_account_summary.tpl *}
{load_presentation_object filename="customer_account_summary" assign="obj"}
<div class="account_summary">	
	<ul>
		<h2>Your account summary</h2>
	<li>Membership Since: {$obj->mRegisterDate}</li><br />
	<li>Membership level: {$obj->mMemberLevel}</li><br />
	<li>Last logon: {$obj->mLastLoginDate} from {$obj->mLastLoginIP}</li>
	</ul> 
</div>