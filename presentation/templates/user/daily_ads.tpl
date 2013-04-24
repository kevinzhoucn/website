{* daily_ads.tpl *}
{* Loop through the list of departments *}
{load_presentation_object filename="user/daily_ads" assign="obj"}
<table style="margin:auto">
	<tbody>	
	{section name=i loop=$mUserAdsList}
		{if $smarty.section.i.index % 4 == 0 }
			{if !$smarty.section.i.first}
				</tr>
			{/if}
			<tr style="margin:20px;">
		{/if}
		<td style="width:160px;">
			<p style="margin:2px 2px 10px 2px;">
			ADS Title, {$obj->mTest}, if it is too long, what happen in the page
			</p>
		    {assign var=selected value=""}
		    {* Verify if the department is selected to decide what CSS style
		       to use *}
		    {if ($obj->mSelectedADS == $mUserAdsList[i].ads_id)}
		      {assign var=selected value="class=\"selected\""}
		    {/if}
		      {* Generate a link for a new department in the list *}
		      <a {$selected} href="{$mUserAdsList[i].url}" class="box-title" target="_blank" >
		        {$mUserAdsList[i].name}{$mUserAdsList[i].description}if it is too long, what happen in the page
		      </a>
	    </td>
	    {if $smarty.section.i.last }
	    	</tr>
	    {/if}
	{/section}
	</tbody>
</table>