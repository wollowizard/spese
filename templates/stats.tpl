{include file="header.tpl" title="Spesa - Statistics"}
<h1>Statistics</h1>

<h2>Personal</h2>

<ul>
    {foreach from=$personalstats key=person item=number}
        <li>{$person} -> {$number}</li>
        {/foreach}
</ul>

{foreach from=$personalstats2 key=person item=number}
    <div class="bar">
        <div class="percentage" style="width:{$number}%">{$person}</div>
    </div>

{/foreach}


{include file="footer.tpl"}
