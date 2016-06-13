<?php
/* Smarty version 3.1.29, created on 2016-05-17 17:58:22
  from "F:\server\www\leiliang\mtwp\Application\View\Home\ornum\ornum.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573aeb3e619282_67481076',
  'file_dependency' => 
  array (
    '904b71ea75dbf6e8bae2b36599dcb34573dc3096' => 
    array (
      0 => 'F:\\server\\www\\leiliang\\mtwp\\Application\\View\\Home\\ornum\\ornum.html',
      1 => 1463473456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573aeb3e619282_67481076 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_28792573aeb3e5d6bf0_21972106',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:ornum/ornum.html */
function block_28792573aeb3e5d6bf0_21972106($_smarty_tpl, $_blockParentStack) {
?>

<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row1_0_saved_item = isset($_smarty_tpl->tpl_vars['row1']) ? $_smarty_tpl->tpl_vars['row1'] : false;
$_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
$__foreach_row1_0_saved_local_item = $_smarty_tpl->tpl_vars['row1'];
?>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">确认完成
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Home&c=ornum&a=edit" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">评价</label>
                    <div>
                        <select id="doc-select-1" name="evaluate">
                            <option value="满意" >满意</option>
                            <option value="比较满意" >比较满意</option>
                            <option value="一般">一般</option>
                            <option value="不满意">不满意</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="doc-select-1">评论</label>
                    <textarea name="comment"> </textarea>
                </div>
                <input type="hidden" name="ornum" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['ornum'];?>
">
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_0_saved_local_item;
}
if ($__foreach_row1_0_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_0_saved_item;
}
?>
<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <thead>
    <tr>
        <th style="vertical-align: middle;">订单号</th>
        <th style="vertical-align: middle;">姓名</th>
        <th style="vertical-align: middle;">电话</th>
        <th style="vertical-align: middle;">服务时间</th>
        <th style="vertical-align: middle;">状态</th>
        <th style="vertical-align: middle;">评价</th>
        <th style="vertical-align: middle;">评论</th>
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
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['number'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['sta'];?>

            <div> <button <?php if ($_smarty_tpl->tpl_vars['row']->value['sta'] == '') {?>disabled="disabled"<?php }?>
                    type="button"
                    class="am-btn am-btn-primary am-btn-xs"
                    data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 300 }" >
                确认完成
            </button>
            </div></td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['evaluate'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['comment'];?>
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
<div>
    <div class="am-fr" style="margin-right: 50px">
        <ul class="am-pagination" style="display: inline-block">
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Home&c=ornum&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">«</a></li>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Home&c=ornum&a=list&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }
}
?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Home&c=ornum&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
        location.href="index.php?p=Home&c=ornum&a=list&page="+oIpt;
    }
<?php echo '</script'; ?>
>
<?php
}
/* {/block 'content'} */
}
