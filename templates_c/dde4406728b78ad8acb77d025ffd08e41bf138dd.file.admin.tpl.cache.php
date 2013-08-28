<?php /* Smarty version Smarty-3.1.14, created on 2013-08-28 14:06:54
         compiled from ".\templates\admin.tpl" */ ?>
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
  ),
  'nocache_hash' => '17755521de7de248c22-75573169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stores' => 0,
    'foo' => 0,
    'queries' => 0,
    'q' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521de7de2fb959_80268017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521de7de2fb959_80268017')) {function content_521de7de2fb959_80268017($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"Spesa - Main"), 0);?>

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
            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                <tr>
                    <td><input type="checkbox" class="check_list" name="check_list[]" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->store_name;?>
"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->store_name;?>
</td>
                </tr>
            <?php } ?>

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
        <?php  $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['q']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['queries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['q']->key => $_smarty_tpl->tpl_vars['q']->value){
$_smarty_tpl->tpl_vars['q']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['q']->value->id;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['q']->value->querystring;?>
</td>
            </tr>
        <?php } ?>

    </tbody>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>