<?php
/* Smarty version 3.1.29, created on 2016-05-13 18:38:58
  from "F:\web\baidu\matao\Application\View\Admin\codes\codes.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5735aec2ccf290_09219886',
  'file_dependency' => 
  array (
    '921b2e42fd09e6b15f378ace54e9a86f862eac47' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\codes\\codes.html',
      1 => 1463131268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_5735aec2ccf290_09219886 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_128875735aec2c75178_28092279',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:codes/codes.html */
function block_128875735aec2c75178_28092279($_smarty_tpl, $_blockParentStack) {
?>

<button style="width: 200px;"
        type="button"
        class="am-btn am-btn-primary am-btn-xs"
        data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 420 }">
    添加代金券
</button>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">添加代金券
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Admin&c=codesAdmin&a=add" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">代码</label>
                    <input name="code" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">所属会员</label>
                    <select id="doc-select-1" name="user_id">
                        <?php
$_from = $_smarty_tpl->tpl_vars['rowu']->value;
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
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
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

                <div>
                    <label for="doc-select-1">代金券金额</label>
                    <input name="money" type="text" class="am-form-field am-radius" placeholder="" />
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">状态</label>
                    <select id="doc-select-1" name="status">
                        <option value="1">未使用</option>
                        <option value="2">已使用</option>
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <thead>
    <tr>
        <th style="vertical-align: middle;">id</th>
        <th style="vertical-align: middle;">代码</th>
        <th style="vertical-align: middle;">所属会员</th>
        <th style="vertical-align: middle;">代金券金额</th>
        <th style="vertical-align: middle;">状态</th>
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
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['code_id'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
</td>
        <td style="vertical-align: middle;">
            <button
                    type="button"
                    class="am-btn am-btn-primary am-btn-xs"
                    data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['code_id'];?>
', closeViaDimmer: 0, width: 400, height: 420 }" >
                编辑
            </button>
            <a href="index.php?p=Admin&c=codesAdmin&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['code_id'];?>
" onclick="return confirm('你确定要删除?')"><button class="am-btn am-btn-default am-btn-xs">删除</button></a>
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
$__foreach_row2_2_saved_item = isset($_smarty_tpl->tpl_vars['row2']) ? $_smarty_tpl->tpl_vars['row2'] : false;
$_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->value) {
$_smarty_tpl->tpl_vars['row2']->_loop = true;
$__foreach_row2_2_saved_local_item = $_smarty_tpl->tpl_vars['row2'];
?>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row2']->value['code_id'];?>
">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">修改代金券
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Admin&c=codesAdmin&a=edit" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">代码</label>
                    <input name="code" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row2']->value['code'];?>
" />
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">所属会员</label>
                    <select id="doc-select-1" name="user_id">
                        <?php
$_from = $_smarty_tpl->tpl_vars['rowu']->value;
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
                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
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

                <div>
                    <label for="doc-select-1">代金券金额</label>
                    <input name="money" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row2']->value['money'];?>
"/>
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">状态</label>
                    <select id="doc-select-1" name="status">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['row2']->value['status'] == '未使用') {?> <?php echo "selected='selected'";
}?>>未使用</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['row2']->value['status'] == '已使用') {?> <?php echo "selected='selected'";
}?>>已使用</option>
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <input type="hidden" name="code_id" value="<?php echo $_smarty_tpl->tpl_vars['row2']->value['code_id'];?>
">
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['row2'] = $__foreach_row2_2_saved_local_item;
}
if ($__foreach_row2_2_saved_item) {
$_smarty_tpl->tpl_vars['row2'] = $__foreach_row2_2_saved_item;
}
}
/* {/block 'content'} */
}
