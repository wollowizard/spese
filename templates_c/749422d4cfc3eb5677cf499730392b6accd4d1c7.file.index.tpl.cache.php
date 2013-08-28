<?php /* Smarty version Smarty-3.1.14, created on 2013-08-28 14:43:01
         compiled from ".\templates\index.tpl" */ ?>
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
  ),
  'nocache_hash' => '25626521df05572e8d6-73697977',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_521df055867432_09175096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521df055867432_09175096')) {function content_521df055867432_09175096($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\PhpProject1\\libs\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"Spesa - Main"), 0);?>

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
                <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['stores_values']->value,'output'=>$_smarty_tpl->tpl_vars['stores_output']->value),$_smarty_tpl);?>
 
            </select>
        </td>
        <td><select name="newpayer">                        
                <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['payers_values']->value,'output'=>$_smarty_tpl->tpl_vars['payers_output']->value),$_smarty_tpl);?>
 
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
            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transactions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                <tr>
                    <td><input type="checkbox" class="check_list" name="check_list[]" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->id;?>
"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->id;?>
</td>
                    <td><input type="number" step="any" name="price<?php echo $_smarty_tpl->tpl_vars['foo']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->price;?>
" disabled /></td>
                    <td><select name="store<?php echo $_smarty_tpl->tpl_vars['foo']->value->id;?>
" disabled>                        
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['stores_values']->value,'selected'=>((string)$_smarty_tpl->tpl_vars['foo']->value->store),'output'=>$_smarty_tpl->tpl_vars['stores_output']->value),$_smarty_tpl);?>
 
                        </select>
                    </td>
                    <td><select name="payer<?php echo $_smarty_tpl->tpl_vars['foo']->value->id;?>
" disabled>                        
                            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['payers_values']->value,'selected'=>((string)$_smarty_tpl->tpl_vars['foo']->value->payer),'output'=>$_smarty_tpl->tpl_vars['payers_output']->value),$_smarty_tpl);?>
 
                        </select></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->date;?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['foo']->value->imgpath==null){?>
                            <textarea disabled>
                                <?php echo $_smarty_tpl->tpl_vars['foo']->value->whypicturenotavailable;?>

                            </textarea>
                        <?php }else{ ?>
                            <a href="#" id="kvitto-<?php echo $_smarty_tpl->tpl_vars['foo']->value->id;?>
" onclick="allerta('<?php echo $_smarty_tpl->tpl_vars['foo']->value->imgpath;?>
');
                                    return false;"> <img width='64px' src="imgs/camera-128.png" /> </a></td>
                            <?php }?>


                </tr>
            <?php } ?>

        </tbody>
    </table>
    &nbsp;&nbsp;
    <img width="38" height="22" src="./imgs/arrow.png" alt="With selected:">
    <a href="#" style="font-size:small" id="selectall" >check/uncheck all</a>
    <input type="submit" value="Delete checked" name=deletesubmit>
</form>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>