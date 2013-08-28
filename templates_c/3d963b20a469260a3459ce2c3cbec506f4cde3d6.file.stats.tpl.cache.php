<?php /* Smarty version Smarty-3.1.14, created on 2013-08-21 17:25:43
         compiled from ".\templates\stats.tpl" */ ?>
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
  ),
  'nocache_hash' => '171445214dbf7e9feb6-70482264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'personalstats' => 0,
    'person' => 0,
    'number' => 0,
    'personalstats2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5214dbf8016f75_80946731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5214dbf8016f75_80946731')) {function content_5214dbf8016f75_80946731($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"Spesa - Statistics"), 0);?>

<h1>Statistics</h1>

<h2>Personal</h2>

<ul>
    <?php  $_smarty_tpl->tpl_vars['number'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['number']->_loop = false;
 $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['personalstats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['number']->key => $_smarty_tpl->tpl_vars['number']->value){
$_smarty_tpl->tpl_vars['number']->_loop = true;
 $_smarty_tpl->tpl_vars['person']->value = $_smarty_tpl->tpl_vars['number']->key;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['person']->value;?>
 -> <?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</li>
        <?php } ?>
</ul>

<?php  $_smarty_tpl->tpl_vars['number'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['number']->_loop = false;
 $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['personalstats2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['number']->key => $_smarty_tpl->tpl_vars['number']->value){
$_smarty_tpl->tpl_vars['number']->_loop = true;
 $_smarty_tpl->tpl_vars['person']->value = $_smarty_tpl->tpl_vars['number']->key;
?>
    <div class="bar">
        <div class="percentage" style="width:<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
%"><?php echo $_smarty_tpl->tpl_vars['person']->value;?>
</div>
    </div>

<?php } ?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>