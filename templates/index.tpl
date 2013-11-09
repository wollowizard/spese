{include file="header.tpl" title="Spesa - Main"}
<h1>New Transaction</h1>
<div style="width:90%;margin:0 auto;">
    <table id="newline">
        <thead>
            <tr>
                <th>Price</th>
                <th>Store</th>
                <th>Payer</th>
                <th>Receipt picture</th>
                <th></th>
            </tr>
        </thead>

        <tbody>

            <tr>
        <form action="index.php" id="formnew" method="POST" enctype="multipart/form-data">
            <td><input type="number" step="any" name="newprice" min=0 value=1 required /></td>
            <td><select name="newstore">                        
                    {html_options values=$stores_values output=$stores_output} 
                </select>
            </td>
            <td><select name="newpayer">                        
                    {html_options values=$payers_values output=$payers_output} 
                </select></td>
            <td>
                <input type='file' id="imgUploadInput" name="imgUploadInput" /><br/>
                <span style="font-size: small" id="nopicturespan"> <a href="#">I dont have a picture of the receipt</a></span>
                <span id="nopicturetextspan">Why don't you have a picture?<br><textarea name="nopicturetextarea" id="nopicturetextarea"></textarea></span>
            </td>
            <td>
                <input type="button" id="newsubmit" value="Submit" name=newsubmit>
            </td>
        </form>

        </tr>
        <tr><td></td><td></td><td></td><td>
                <span id="imgspan">

                </span>  </td><td></td></tr>

        </tbody>
    </table>
</div>

<div  id="dialogbox" >

</div>

<br/><br/><br/>

<h1>History</h1>
<div style="width:90%;margin:0 auto;border:2px solid;border-radius:25px;">
    <div style="margin:30px">
        <form action="index.php" method="POST">

            <table class="datatableclass">
                <thead>
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>Price</th>
                        <th>Store</th>
                        <th>Payer</th>
                        <th>Date</th>
                        <th>Receipt</th>

                    </tr>
                </thead>

                <tbody>
                    {foreach from=$transactions item=foo}
                        <tr>
                            <td><input type="checkbox" class="check_list" name="check_list[]" value="{$foo->id}"></td>
                            <td>{$foo->id}</td>
                            <td><input type="number" step="any" name="price{$foo->id}" value="{$foo->price}" disabled /></td>
                            <td><select name="store{$foo->id}" disabled>                        
                                    {html_options values=$stores_values selected="{$foo->store}" output=$stores_output} 
                                </select>
                            </td>
                            <td><select name="payer{$foo->id}" disabled>                        
                                    {html_options values=$payers_values selected="{$foo->payer}" output=$payers_output} 
                                </select></td>
                            <td>{$foo->date}</td>
                            <td style="text-align: center">
                                {if $foo->imgpath eq null}
                                    <textarea disabled rows="4" cols="5">
                                        {$foo->whypicturenotavailable}
                                    </textarea>
                                {else}
                                    <a href="#" id="kvitto-{$foo->id}" onclick="allerta('{$foo->imgpath}');
                                            return false;"> <img width='64px' src="imgs/camera-128.png" /> </a></td>
                                    {/if}


                        </tr>
                    {/foreach}

                </tbody>
            </table>
            &nbsp;&nbsp;
            <img width="38" height="22" src="./imgs/arrow.png" alt="With selected:">
            <a href="#" style="font-size:small" id="selectall" >check/uncheck all</a>
            <input type="submit" value="Delete checked" name=deletesubmit>
        </form>
    </div>
</div>


{include file="footer.tpl"}
