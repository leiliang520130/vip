<?php
/* Smarty version 3.1.29, created on 2016-05-17 16:18:58
  from "F:\web\baidu\matao\Application\View\Admin\order\order.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ad3f2aa6836_00824385',
  'file_dependency' => 
  array (
    'bbd09f8b5670d4597b8e714d54e30f197247a8c5' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\order\\order.html',
      1 => 1463473135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573ad3f2aa6836_00824385 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_12090573ad3f295a266_24074564',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:order/order.html */
function block_12090573ad3f295a266_24074564($_smarty_tpl, $_blockParentStack) {
?>

<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row2_0_saved_item = isset($_smarty_tpl->tpl_vars['row2']) ? $_smarty_tpl->tpl_vars['row2'] : false;
$_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->value) {
$_smarty_tpl->tpl_vars['row2']->_loop = true;
$__foreach_row2_0_saved_local_item = $_smarty_tpl->tpl_vars['row2'];
?>
<div class="am-modal am-modal-no-btn"  tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row2']->value['order_id'];?>
1" >
    <div class="am-modal-dialog">
        <div class="am-modal-hd">预约状态
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd" >
            <form class="am-form" action="index.php?p=Admin&c=orderAdmin&a=status" method="post" enctype="multipart/form-data">
                <div>
                    <select id="doc-select-1" name="status">
                        <option value="成功" <?php if ($_smarty_tpl->tpl_vars['row2']->value['status'] == '成功') {?> <?php echo "selected='selected'";
}?>>成功</option>
                        <option value="失败" <?php if ($_smarty_tpl->tpl_vars['row2']->value['status'] == '失败') {?> <?php echo "selected='selected'";
}?>>失败</option>
                    </select>
                </div>
               <br/>
                <div>
                    <textarea name="reply" rows="3"><?php echo $_smarty_tpl->tpl_vars['row2']->value['reply'];?>
</textarea>
                </div>
                <input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->tpl_vars['row2']->value['order_id'];?>
">
                <input type="hidden" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['row2']->value['phone'];?>
">
                <input type="hidden" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['row2']->value['realname'];?>
">
                <input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['row2']->value['date'];?>
">
                <p><button type="submit" class="am-btn am-btn-default" >提交</button></p>
            </form>
        </div>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['row2'] = $__foreach_row2_0_saved_local_item;
}
if ($__foreach_row2_0_saved_item) {
$_smarty_tpl->tpl_vars['row2'] = $__foreach_row2_0_saved_item;
}
?>
<!--s-->
<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <thead>
    <tr>
        <th style="vertical-align: middle;">姓名</th>
        <th style="vertical-align: middle;">电话</th>
        <th style="vertical-align: middle;">预约美发师</th>
        <th style="vertical-align: middle;">备注</th>
        <th style="vertical-align: middle;">预约日期</th>
        <th style="vertical-align: middle;">预约状态</th>
        <th style="vertical-align: middle;">回复信息</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
    <tr style="text-align: center;">
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['barber'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>

           <div> <button
                    type="button"
                    class="am-btn am-btn-primary am-btn-xs"
                    data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['order_id'];?>
1', closeViaDimmer: 0, width: 400, height: 320 }" >
                更改状态
            </button>
               </div>
        </td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['reply'];?>
</td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
    </tbody>
</table>
<!--分页开始-->
<div>
    <div class="am-fr" style="margin-right: 50px">
        <ul class="am-pagination" style="display: inline-block">
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=orderAdmin&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">«</a></li>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Admin&c=orderAdmin&a=list&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }
}
?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=orderAdmin&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">»</a></li>
        </ul>
        <div style="display: inline-block">
            共<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
条记录，到第<input id='page' type='text' size='2' name='page'>页
            <input onclick='check()'  type='button' id='sbu' value='确定'>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function check(){
        var oIpt=document.getElementById('page').value;
        location.href="index.php?p=Admin&c=orderAdmin&a=list&page="+oIpt;
    }
<?php echo '</script'; ?>
>
<!--分页结束-->
<?php
}
/* {/block 'content'} */
}
