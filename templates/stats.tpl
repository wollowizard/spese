{include file="header.tpl" title="Spesa - Statistics"}
<h1>Statistics</h1>

<h2>Personal</h2>

<ul>
    {foreach from=$personalstats key=person item=number}
        <li>{$person} -> {$number} ({$number-$max}) </li>
        {/foreach}
</ul>

{foreach from=$personalstats2 key=person item=number}
    <div class="bar" >
        <div class="percentage" style="width:{$number}%">{$person}  </div>
    </div>

{/foreach}

<h2>Per month</h2>

<ul>
{foreach from=$monthstats key=month item=arrofvalues}    
    <li>{$month}  --->  {$arrofvalues}</li>
{/foreach}
</ul>

<h2>Per store</h2>

<ul>
{foreach from=$storestats key=store item=arrofvalues}    
    <li>{$store}  --->  {$arrofvalues}</li>
{/foreach}
</ul>



{include file="footer.tpl"}
