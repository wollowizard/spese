{include file="header.tpl" title="Spesa - Main"}
<h1>Stores</h1>
<h2>New store</h2>
<table id="newstore">
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <tr>
    <form action="admin.php" method="POST">
        <td><input type="text" name="newstore" required /></td>        
        <td>
            <input type="submit" value="Submit" name='newstoresubmit' >
        </td>
    </form>

</tr>


</tbody>
</table>

<div  id="dialogbox" >

</div>

<br/><br/><br/>

<h2>Available stores</h2>

<form action="admin.php" method="POST">

    <table class="datatableclass">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>

            </tr>
        </thead>

        <tbody>
            {foreach from=$stores item=foo}
                <tr>
                    <td><input type="checkbox" class="check_list" name="check_list[]" value="{$foo->store_name}"></td>
                    <td>{$foo->store_name}</td>
                </tr>
            {/foreach}

        </tbody>
    </table>
    &nbsp;&nbsp;
    <img width="38" height="22" src="./imgs/arrow.png" alt="With selected:">
    <a href="#" style="font-size:small" id="selectall" >check/uncheck all</a>
    <input type="submit" value="Delete checked" name=deletesubmit>
</form>

<h1> Operations log</h1>
<table class="datatableclassfull">
    <thead>
        <tr>
            <th>id</th>
            <th>query</th>
        </tr>
    </thead>

    <tbody>
        {foreach from=$queries item=q}
            <tr>
                <td>{$q->id}</td>
                <td>{$q->querystring}</td>
            </tr>
        {/foreach}

    </tbody>
</table>
{include file="footer.tpl"}
