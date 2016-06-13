<?php
/* Smarty version 3.1.29, created on 2016-05-17 15:35:43
  from "F:\web\baidu\matao\Application\View\Home\order\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573ac9cf910fb2_35642293',
  'file_dependency' => 
  array (
    '32f6fe9401546831798debe80638144ead2bf577' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Home\\order\\list.html',
      1 => 1463470542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573ac9cf910fb2_35642293 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_16746573ac9cf899003_76711740',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:order/list.html */
function block_16746573ac9cf899003_76711740($_smarty_tpl, $_blockParentStack) {
?>

<button style="width: 200px;"
        type="button"
        class="am-btn am-btn-primary am-btn-xs"
        data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 420 }">
    添加预约
</button>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">添加预约
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Home&c=orderuser&a=add" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">电话</label>
                    <input name="phone" type="text" class="am-form-field am-radius" placeholder="" />
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">预约美发师</label>
                    <select id="doc-select-1" name="barber">
                        <?php
$_from = $_smarty_tpl->tpl_vars['rowm']->value;
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
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['member_id'] == 1) {?>
                        <?php continue 1;?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <div class="am-form-group am-form-icon">
                    <i class="am-icon-calendar"></i>
                    <input type="date" name="date" class="am-form-field am-input-sm" placeholder="时间">
                </div>
                <div>
                    <label for="doc-select-1">备注</label>
                    <textarea name="content"></textarea>
                </div>
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <thead>
    <tr>
        <th style="vertical-align: middle;">电话</th>
        <th style="vertical-align: middle;">预约美发师</th>
        <th style="vertical-align: middle;">备注</th>
        <th style="vertical-align: middle;">预约日期</th>
        <th style="vertical-align: middle;">预约状态</th>
        <th style="vertical-align: middle;">回复信息</th>
        <th style="vertical-align: middle;">操作</th>
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
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['barber'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['reply'];?>
</td>
        <td style="vertical-align: middle;">
            <button <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == '已取消' || $_smarty_tpl->tpl_vars['row']->value['status'] == '') {?>disabled="disabled"<?php }?>
                    type="button"
                    class="am-btn am-btn-primary am-btn-xs"
                    data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['order_id'];?>
', closeViaDimmer: 0, width: 400, height: 420 }" >
                编辑
            </button>
            <a href="index.php?p=Home&c=orderuser&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['order_id'];?>
" onclick="return confirm('你确定要取消?')"><button  class="am-btn am-btn-default am-btn-xs" <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == '已取消' || $_smarty_tpl->tpl_vars['row']->value['status'] == '') {?>disabled="disabled"<?php }?> >取消</button></a>
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
<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row1_2_saved_item = isset($_smarty_tpl->tpl_vars['row1']) ? $_smarty_tpl->tpl_vars['row1'] : false;
$_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
$__foreach_row1_2_saved_local_item = $_smarty_tpl->tpl_vars['row1'];
?>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row1']->value['order_id'];?>
">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">修改预约
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Home&c=orderuser&a=edit" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">电话</label>
                    <input name="phone" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['phone'];?>
"/>
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">预约美发师</label>
                    <select id="doc-select-1" name="barber">
                        <?php
$_from = $_smarty_tpl->tpl_vars['rowm']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_3_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_3_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['member_id'] == 1) {?>
                        <?php continue 1;?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved_local_item;
}
if ($__foreach_row_3_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved_item;
}
?>
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <div class="am-form-group am-form-icon">
                    <i class="am-icon-calendar"></i>
                    <input type="date" name="date" class="am-form-field am-input-sm" placeholder="时间" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['date'];?>
">
                </div>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['order_id'];?>
">
                <div>
                    <label for="doc-select-1">备注</label>
                    <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['row1']->value['content'];?>
</textarea>
                </div>
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_2_saved_local_item;
}
if ($__foreach_row1_2_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_2_saved_item;
}
?>

<div>
    <div class="am-fr" style="margin-right: 50px">
        <ul class="am-pagination" style="display: inline-block">
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Home&c=orderuser&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">«</a></li>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Home&c=orderuser&a=list&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }
}
?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Home&c=orderuser&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
        location.href="index.php?p=Home&c=orderuser&a=list&page="+oIpt;
    }
<?php echo '</script'; ?>
>

<?php
}
/* {/block 'content'} */
}
