<?php
/* Smarty version 3.1.29, created on 2016-05-10 14:35:50
  from "F:\web\baidu\matao\Application\View\Admin\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573181460b6aa3_55312013',
  'file_dependency' => 
  array (
    '2e29b4ab38da56f59c4bd5785c47bc302caf82bf' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\list.html',
      1 => 1462862147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573181460b6aa3_55312013 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_312795731814603db42_16825375',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:list.html */
function block_312795731814603db42_16825375($_smarty_tpl, $_blockParentStack) {
?>

<form action="index.php?p=Admin&c=usersAdmin&a=seek" method="post" style="display: inline-block;">
    搜索&nbsp;&nbsp;&nbsp;<input type="text" name="seek" />
</form>
<button
        type="button"
        class="am-btn am-btn-primary am-btn-xs"
        data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 620 }" style="margin-left: 720px;">
   添加用户
</button>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">添加用户
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Admin&c=usersAdmin&a=adduser" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">用户名</label>
                    <input name="username" type="text" class="am-form-field am-radius" placeholder="" />
                </div>
                <div>
                    <label for="doc-select-1">姓名</label>
                    <input name="realname" type="text" class="am-form-field am-radius" placeholder="" /></div>
                    <div>
                        <label for="doc-select-1">电话</label>
                        <input name="telphone" type="text" class="am-form-field am-radius" placeholder="" />
                </div>
                <div>
                        <label for="doc-select-1">密码</label>
                        <input name="password" type="password" class="am-form-field am-radius" placeholder="" />
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">性别</label>
                    <select id="doc-select-1" name="sex">
                        <option value="1">男</option>
                        <option value="2">女</option>
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <div>
                    <div>
                        <label for="doc-select-1">备注</label>
                       <textarea name="remark"></textarea>
                    </div>
                <label for="doc-select-1">头像</label>
                <input name="file" type="file" class="am-form-field am-radius" placeholder="" />
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
        <th style="vertical-align: middle;">用户名</th>
        <th style="vertical-align: middle;">姓名</th>
        <th style="vertical-align: middle;">头像</th>
        <th style="vertical-align: middle;">性别</th>
        <th style="vertical-align: middle;">电话</th>
        <th style="vertical-align: middle;">余额</th>
        <th style="vertical-align: middle;">vip</th>
        <th style="vertical-align: middle;">操作</th>
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
    <tr style="text-align: center;">
        <td style="vertical-align: middle;" >
            <?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>

        </td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
</td>
        <td style="vertical-align: middle;"><img src="./Public/Upload/<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
" width="80px;" height="80px;"></td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['sex'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['telphone'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['money'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['is_vip'];?>
</td>
        <td style="vertical-align: middle;">
            <button
                    type="button"
                    class="am-btn am-btn-primary am-btn-xs"
                    data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
', closeViaDimmer: 0, width: 400, height: 620 }" >
                编辑
            </button>
            <a href="index.php?p=Admin&c=usersAdmin&a=removeuser&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" onclick="return confirm('你确定要删除?')"><button class="am-btn am-btn-default am-btn-xs">删除</button></a>
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
<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row1_1_saved_item = isset($_smarty_tpl->tpl_vars['row1']) ? $_smarty_tpl->tpl_vars['row1'] : false;
$_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
$__foreach_row1_1_saved_local_item = $_smarty_tpl->tpl_vars['row1'];
?>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row1']->value['user_id'];?>
">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">修改用户
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Admin&c=usersAdmin&a=edituser" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">用户名</label>
                    <input name="username" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['username'];?>
" />
                </div>
                <div>
                    <label for="doc-select-1">姓名</label>
                    <input name="realname" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['realname'];?>
" /></div>
                <div>
                    <label for="doc-select-1">电话</label>
                    <input name="telphone" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['telphone'];?>
" />
                </div>
                <div>
                    <label for="doc-select-1">密码</label>
                    <input name="password" type="password" class="am-form-field am-radius" placeholder="" />
                </div>
                <div class="am-form-group">
                    <label for="doc-select-1">性别</label>
                    <select id="doc-select-1" name="sex">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['row1']->value['sex'] == '男') {?> <?php echo "selected='selected'";
}?>>男</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['row1']->value['sex'] == '女') {?> <?php echo "selected='selected'";
}?>>女</option>
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['user_id'];?>
">
                <div>
                    <div>
                        <label for="doc-select-1">备注</label>
                        <textarea name="remark"><?php echo $_smarty_tpl->tpl_vars['row1']->value['remark'];?>
</textarea>
                    </div>
                    <label for="doc-select-1">头像</label>
                    <input name="file" type="file" class="am-form-field am-radius" placeholder="" />
                </div>
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_1_saved_local_item;
}
if ($__foreach_row1_1_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_1_saved_item;
}
?>
<div>
    <div class="am-fr" style="margin-right: 50px">
        <ul class="am-pagination" style="display: inline-block">
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=usersAdmin&a=listuser&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">«</a></li>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Admin&c=usersAdmin&a=listuser&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
            <?php }
}
?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=usersAdmin&a=listuser&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
<?php
}
/* {/block 'content'} */
}
