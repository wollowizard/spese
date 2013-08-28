<?php /* Smarty version Smarty-3.1.14, created on 2013-08-28 14:43:01
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15179521df0558d21f8-86826865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1377082139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15179521df0558d21f8-86826865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'Name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521df0558de112_29990605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521df0558de112_29990605')) {function content_521df0558de112_29990605($_smarty_tpl) {?><HTML>
    <HEAD>
        <TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
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
<?php }} ?>