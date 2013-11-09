<HTML>
    <HEAD>
        <meta name="viewport" content="width=device-width">
        <TITLE>{$title} - {$Name}</TITLE>
        <!-- jquery/jqueryui -->
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.js"></script>

        <script
            src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"
        type="text/javascript"></script>

        <script type="text/javascript"
        src="script/script.js"></script>

        <link rel="stylesheet"
              href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/ui-lightness/jquery-ui.css"
              type="text/css" media="screen" />

        <link rel="stylesheet"
              href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"
              type="text/css" media="screen" />
        
          <link rel="stylesheet"
              href="css.css"
              type="text/css" media="screen" />


        <!-- /jquery/jqueryui -->
    </HEAD>
    <BODY bgcolor="#ffffff">

        <div id="menu" >
            <ul>
                <li><a href="index.php">Transactions</a></li>
                <li><a href="stats.php">Statistics</a></li>
                <li><a href="admin.php">Administration</a></li>
                <li><a href="mobile.php">Mobile</a></li>
                
            </ul>
        </div>
        <br/><br/>

<div style="width:50%;margin:0 auto;">
    <form action="index.php" id="formnew" method="POST" enctype="multipart/form-data">
        <table id="newline">
            <thead>
                <tr>
                    <th>Price</th>
                    <th>Store</th>
                    <th>Payer</th>

                </tr>
            </thead>

            <tbody>

                <tr>

                    <td><input type="number" step="any" name="newprice" min=0 value=1 required /></td>
                    <td><select name="newstore">                        
                            {html_options values=$stores_values output=$stores_output} 
                        </select>
                    </td>
                    <td><select name="newpayer">                        
                            {html_options values=$payers_values output=$payers_output} 
                        </select></td>            

                </tr>
                <tr><td></td><td></td><td></td></tr>

            </tbody>
        </table>
        <table id="newline2">
            <thead>
                <tr>
                    <th>Picture</th>
                    <th></th>

                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>
                        <input type='file' id="imgUploadInput" name="imgUploadInput" /><br/>
                        <span style="font-size: small" id="nopicturespan"> <a href="#">I dont have a picture of the receipt</a></span>
                        <span id="nopicturetextspan">Why don't you have a picture?<br><textarea name="nopicturetextarea" id="nopicturetextarea"></textarea></span>
                    </td>
                    <td>
                        <input type="button" id="newsubmit" value="Submit" name=newsubmit>
                    </td>


                </tr>
                <tr><td></td><td></td></tr>

            </tbody>
        </table>
    </form>


    <!--    <table id="newline">
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
</table>-->
</div>


{include file="footer.tpl"}
