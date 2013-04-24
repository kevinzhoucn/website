{* daily_ads.tpl *}
{* Loop through the list of departments *}
<table>
	{section name=i loop=$mUserAdsList}
	<tr>
		<td>
		    {assign var=selected value=""}
		    {* Verify if the department is selected to decide what CSS style
		       to use *}
		    {if ($obj->mSelectedADS == $mUserAdsList[i].ads_id)}
		      {assign var=selected value="class=\"selected\""}
		    {/if}
		      {* Generate a link for a new department in the list *}
		      <a {$selected} href="{$mUserAdsList[i].url}" class="box-title" target="_blank" >
		        {$mUserAdsList[i].name}{$mUserAdsList[i].description}
		      </a>
	    </td>
	</tr>
	{/section}
</table>


{*
<div style="width:960px;float:left">
{foreach item=ads from=$mUserAdsList}	
	<div style="width:120px;height:80px;float:left;">
		<td>{$ads.description}</td>
	</div>
{/foreach}
</div>
<div style="width:760px;float:left">


<table>
{section name=i loop=$mUserAdsList}
<tr>
	<td>
	    {assign var=selected value=""}
	    {* Verify if the department is selected to decide what CSS style
	       to use *}
	    {if ($obj->mSelectedADS == $mUserAdsList[i].ads_id)}
	      {assign var=selected value="class=\"selected\""}
	    {/if}
	      {* Generate a link for a new department in the list *}
	      <a {$selected} href="{$mUserAdsList[i].url}" class="box-title" target="_blank" >
	        {$mUserAdsList[i].name}{$mUserAdsList[i].description}
	      </a>
    </td>
</tr>
{/section}
</table>
*}