<?php
/* Smarty version 3.1.30, created on 2017-09-05 10:34:39
  from "D:\Xampp\xampp\htdocs\phpStorm_Project\Y_MVCLearning\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ae619f4832d6_25538179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67bd3710a867ccbad69e802d8d0160d9e27c0503' => 
    array (
      0 => 'D:\\Xampp\\xampp\\htdocs\\phpStorm_Project\\Y_MVCLearning\\test.tpl',
      1 => 1504596878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ae619f4832d6_25538179 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        td{
            width:100px;
            height: 80px;
            text-align: center;
        }
        img{
            width:100px;
            height:80px;
        }
    </style>
</head>
<body>


    <table>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>content</td>
            <td>pic</td>
            <td>cateName</td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["content"];?>
</td>
            <td><img src=<?php echo $_smarty_tpl->tpl_vars['v']->value["pic"];?>
></td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cateName"];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>


</body>
</html>

<?php }
}
