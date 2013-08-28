<?php /*%%SmartyHeaderCode:17755521de7de248c22-75573169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dde4406728b78ad8acb77d025ffd08e41bf138dd' => 
    array (
      0 => '.\\templates\\admin.tpl',
      1 => 1377098395,
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
  'nocache_hash' => '17755521de7de248c22-75573169',
  'variables' => 
  array (
    'stores' => 0,
    'foo' => 0,
    'queries' => 0,
    'q' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521de7de3ebbc9_35846959',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521de7de3ebbc9_35846959')) {function content_521de7de3ebbc9_35846959($_smarty_tpl) {?><HTML>
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
                            <tr>
                    <td><input type="checkbox" class="check_list" name="check_list[]" value="COOP"></td>
                    <td>COOP</td>
                </tr>
                            <tr>
                    <td><input type="checkbox" class="check_list" name="check_list[]" value="ICA"></td>
                    <td>ICA</td>
                </tr>
                            <tr>
                    <td><input type="checkbox" class="check_list" name="check_list[]" value="OOB"></td>
                    <td>OOB</td>
                </tr>
            
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
        
    </tbody>
</table>
</BODY>
</HTML>

<?php }} ?>