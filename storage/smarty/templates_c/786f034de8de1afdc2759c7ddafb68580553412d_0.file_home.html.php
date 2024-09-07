<?php
/* Smarty version 5.4.1, created on 2024-09-07 08:47:06
  from 'file:home.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66dc130a4b89a6_79452768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '786f034de8de1afdc2759c7ddafb68580553412d' => 
    array (
      0 => 'home.html',
      1 => 1725698824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66dc130a4b89a6_79452768 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\mine\\app\\Views';
?><h1><?php echo $_smarty_tpl->getValue('title');?>
</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
       
            <tr>
                <td><?php echo $_smarty_tpl->getValue('users')['id'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('users')['name'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('users')['email'];?>
</td>
            </tr>
      
    </tbody>
</table>
<?php }
}
