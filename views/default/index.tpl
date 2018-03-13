{*головна сторінка*}

{foreach $rsProducts as $item name = products}
    <div style=" float: left; padding: 0px 30px 40px 0px ">
        <a href="/product/{$item['ID']}">
            <img src="/images/products/{$item['image']}" style="height: 100px" alt="Tovar =)">
        </a><br>
        <a href="/product/{$item['ID']}/">{$item['name']}</a>
    </div>

    {if $smarty.foreach.products.iteration mod 3 == 0}
        <div style="clear: both;"></div>
    {/if}
{/foreach}