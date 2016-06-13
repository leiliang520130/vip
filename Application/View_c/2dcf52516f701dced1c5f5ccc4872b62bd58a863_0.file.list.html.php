<?php
/* Smarty version 3.1.29, created on 2016-05-10 14:21:21
  from "F:\server\www\leiliang\mtwp\Application\View\Admin\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57317de1004255_08130909',
  'file_dependency' => 
  array (
    '2dcf52516f701dced1c5f5ccc4872b62bd58a863' => 
    array (
      0 => 'F:\\server\\www\\leiliang\\mtwp\\Application\\View\\Admin\\list.html',
      1 => 1462861279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_57317de1004255_08130909 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_2980057317de0ef8434_40010240',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:list.html */
function block_2980057317de0ef8434_40010240($_smarty_tpl, $_blockParentStack) {
?>

<div>
<form action="" method="get">
    <input type="text" class="am-form-field am-radius" placeholder="搜索类容" style="display: inline-block;width: 300px"/>
    <button type="button" class="am-btn am-btn-secondary am-radius">搜索</button>
</form>
</div>
<table class="am-table am-table-bordered am-table-striped am-table-compact">
    <thead>
    <tr>
        <th>ID</th>
        <th>用户名</th>
        <th>姓名</th>
        <th>电话</th>
        <th>最后登录时间</th>
        <th>最后登录ip</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>

       <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>

    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['telephone'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['last_login'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['last_loginip'];?>
</td>
        <td>
            <button class="am-btn am-btn-primary am-btn-xs">修改</button>
            <button class="am-btn am-btn-default am-btn-xs">删除</button>
        </td>
    </tr>

      <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>

    </tbody>
</table>

<!--分页开始-->
<div>
    <div class="am-fr" style="margin-right: 50px">
        <ul class="am-pagination" style="display: inline-block">
             <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=members&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">«</a></li>

             <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Admin&c=members&a=list&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
             <?php }
}
?>

             <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=members&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">»</a></li>
        </ul>
        <div style="display: inline-block">
            到第<input id='page' type='text' size='2' name='page'>页
            <input onclick='check()'  type='button' id='sbu' value='确定'>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function check(){
        var oIpt=document.getElementById('page').value;
        location.href="index.php?p=Admin&c=members&a=list&page="+oIpt;
    }
<?php echo '</script'; ?>
>
<!--分页结束-->
<?php
}
/* {/block 'content'} */
}
