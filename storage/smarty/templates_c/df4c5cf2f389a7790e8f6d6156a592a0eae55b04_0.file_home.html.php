<?php
/* Smarty version 5.4.1, created on 2024-09-07 10:09:55
  from 'file:home.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_66dc2673534d04_69603025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4c5cf2f389a7790e8f6d6156a592a0eae55b04' => 
    array (
      0 => 'home.html',
      1 => 1725703789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66dc2673534d04_69603025 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\mine\\app\\Views';
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
                <td><?php echo $_smarty_tpl->getValue('users')['username'];?>
</td>
                <td><?php echo $_smarty_tpl->getValue('users')['company'];?>
</td>
            </tr>
      
    </tbody>
</table>
<?php }
}
