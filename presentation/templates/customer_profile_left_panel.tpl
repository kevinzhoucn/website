{* customer_profile_left_panel.tpl *}
{load_presentation_object filename="customer_profile_left_panel" assign="obj"}
 <div class="profile_left_panel">
 	<ul>
 		<li><a href={$obj->mLinkAccountSummary}>Accoutn Summary</a></li>
 		<li><a href={$obj->mLinkAccountEdit}>Accoutn Edit</a></li>
 		<li><a href={$obj->mLinkEarningStatus}>Earning Status</a></li>
 		<li><a href={$obj->mLinkMyReferrals}>My Referrals</a></li>
 	</ul>
 </div>

