<?php /*%%SmartyHeaderCode:171445214dbf7e9feb6-70482264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d963b20a469260a3459ce2c3cbec506f4cde3d6' => 
    array (
      0 => '.\\templates\\stats.tpl',
      1 => 1376694124,
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
  'nocache_hash' => '171445214dbf7e9feb6-70482264',
  'variables' => 
  array (
    'personalstats' => 0,
    'person' => 0,
    'number' => 0,
    'personalstats2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5214dbf8140bc5_66835480',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5214dbf8140bc5_66835480')) {function content_5214dbf8140bc5_66835480($_smarty_tpl) {?><HTML>
    <HEAD>
        <TITLE>Spesa - Statistics - <br />
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

<h1>Statistics</h1>

<h2>Personal</h2>

<ul>
            <li>ALFREDO -> 52</li>
                <li>EDOARDO -> 30</li>
        </ul>

    <div class="bar">
        <div class="percentage" style="width:63.414634146341%">ALFREDO</div>
    </div>

    <div class="bar">
        <div class="percentage" style="width:36.585365853659%">EDOARDO</div>
    </div>



</BODY>
</HTML>

<?php }} ?>