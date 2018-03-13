	{* левый столбец *}

<div id="leftColumn">


<div id="leftMenu">
	<div class="menuCaption">Меню:</div>
		{foreach $rsCategories as $item}
			<a href="/category/{$item['ID']}/">{$item['name']}</a> <br />

			{if isset($item['children'])}
				{foreach $item['children'] as $itemChild}
					---<a href="/category/{$itemChild['ID']}/">{$itemChild['name']}</a><br>
				{/foreach}
			{/if}

		{/foreach}
</div>  

</div>