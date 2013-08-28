<?php /*%%SmartyHeaderCode:25626521df05572e8d6-73697977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1377691682,
      2 => 'file',
    ),
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1377082139,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1376682759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25626521df05572e8d6-73697977',
  'variables' => 
  array (
    'stores_values' => 0,
    'stores_output' => 0,
    'payers_values' => 0,
    'payers_output' => 0,
    'transactions' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521df05594b6e8_35650912',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521df05594b6e8_35650912')) {function content_521df05594b6e8_35650912($_smarty_tpl) {?><HTML>
    <HEAD>
        <TITLE>Spesa - Main - <br />
<b>Notice</b>:  Undefined index: Name in <b>C:\xampp\htdocs\PhpProject1\templates_c\10e0737838b4a574ef135d0c601e7b602cfaf37a.file.header.tpl.cache.php</b> on line <b>30</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>C:\xampp\htdocs\PhpProject1\templates_c\10e0737838b4a574ef135d0c601e7b602cfaf37a.file.header.tpl.cache.php</b> on line <b>30</b><br />
</TITLE>
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
                
            </ul>
        </div>
        <br/><br/>

<h1>New Transaction</h1>
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
                <option value="COOP">COOP</option>
<option value="ICA">ICA</option>
<option value="OOB">OOB</option>
 
            </select>
        </td>
        <td><select name="newpayer">                        
                <option value="ALFREDO">ALFREDO</option>
<option value="EDOARDO">EDOARDO</option>
<option value="FERNANDO">FERNANDO</option>
<option value="GERARD">GERARD</option>
 
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

<div  id="dialogbox" >

</div>

<br/><br/><br/>

<h1>History</h1>
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
                            <tr>
                    <td><input type="checkbox" class="check_list" name="check_list[]" value="23"></td>
                    <td>23</td>
                    <td><input type="number" step="any" name="price23" value="1" disabled /></td>
                    <td><select name="store23" disabled>                        
                            <option value="COOP" selected="selected">COOP</option>
<option value="ICA">ICA</option>
<option value="OOB">OOB</option>
 
                        </select>
                    </td>
                    <td><select name="payer23" disabled>                        
                            <option value="ALFREDO" selected="selected">ALFREDO</option>
<option value="EDOARDO">EDOARDO</option>
<option value="FERNANDO">FERNANDO</option>
<option value="GERARD">GERARD</option>
 
                        </select></td>
                    <td>2013-08-28 14:35:39</td>
                    <td>
                                                    <a href="#" id="kvitto-23" onclick="allerta('upload/2013-08-28--14-35-39.jpg');
                                    return false;"> <img width='64px' src="imgs/camera-128.png" /> </a></td>
                            

                </tr>
            
        </tbody>
    </table>
    &nbsp;&nbsp;
    <img width="38" height="22" src="./imgs/arrow.png" alt="With selected:">
    <a href="#" style="font-size:small" id="selectall" >check/uncheck all</a>
    <input type="submit" value="Delete checked" name=deletesubmit>
</form>


</BODY>
</HTML>

<?php }} ?>