<?php
/* Smarty version 3.1.29, created on 2016-05-17 15:38:24
  from "F:\web\baidu\matao\Application\View\Admin\members\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573aca704efe39_57274849',
  'file_dependency' => 
  array (
    '75c1e641641a07cee41bc47ee81a5d3a54b4610b' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\members\\list.html',
      1 => 1463470011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573aca704efe39_57274849 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_4703573aca704697d7_95895251',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:./members/list.html */
function block_4703573aca704697d7_95895251($_smarty_tpl, $_blockParentStack) {
?>

<div>
    <input type="text" id="search" name="search" class="am-form-field am-radius" placeholder="搜索内容" style="display: inline-block;width: 300px"/>
    <button type="button" onclick="search()" class="am-btn am-btn-secondary am-radius">搜索</button>
    <?php echo '<script'; ?>
 type="text/javascript">
        function search(){
            var oSer=document.getElementById('search').value;
            location.href="index.php?p=Admin&c=members&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&search="+oSer;
        }
    <?php echo '</script'; ?>
>
</div>
<div id="" style="text-align: left;width: 800px;">
    <button style="width: 200px;"
            type="button"
            class="am-btn am-btn-primary am-btn-xs"
            data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 580 }">
        添加员工
    </button>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">添加员工
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form class="am-form" enctype="multipart/form-data" action="index.php?p=Admin&c=members&a=insert" method="post">
                    <div>
                        <label for="doc-select-1">用户名</label>
                        <input name="username" type="text" class="am-form-field am-radius" placeholder="" />
                    </div>
                    <div>
                        <label for="doc-select-1">密码</label>
                        <input name="password" type="text" class="am-form-field am-radius" placeholder="" />
                    </div>
                    <div>
                        <label for="doc-select-1">姓名</label>
                        <input name="realname" type="text" class="am-form-field am-radius" placeholder="" />
                    </div>
                    <div>
                        <label for="doc-select-1">电话</label>
                        <input name="telephone" type="text" class="am-form-field am-radius" placeholder="" />
                    </div>
                    <div class="am-form-group">
                        <label for="doc-select-1">部门</label>
                        <select id="doc-select-1" name="group_id">
                            <?php
$_from = $_smarty_tpl->tpl_vars['group']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_gro_0_saved_item = isset($_smarty_tpl->tpl_vars['gro']) ? $_smarty_tpl->tpl_vars['gro'] : false;
$_smarty_tpl->tpl_vars['gro'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['gro']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gro']->value) {
$_smarty_tpl->tpl_vars['gro']->_loop = true;
$__foreach_gro_0_saved_local_item = $_smarty_tpl->tpl_vars['gro'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['gro']->value['group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gro']->value['name'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['gro'] = $__foreach_gro_0_saved_local_item;
}
if ($__foreach_gro_0_saved_item) {
$_smarty_tpl->tpl_vars['gro'] = $__foreach_gro_0_saved_item;
}
?>
                        </select>
                        <span class="am-form-caret"></span>
                    </div>
                    <div class="am-form-group am-form-file">
                        <button type="button" class="am-btn am-btn-default am-btn-sm">
                            <i class="am-icon-cloud-upload"></i> 上传头像</button>
                        <input name="photo" id="doc-form-file" type="file" multiple>
                        <div id="file-list"></div>
                    </div>
                    <div class="am-form-group">
                        是否管理员:
                        <label class="am-radio-inline">
                            <input type="radio"  value="1" name="is_admin">是
                        </label>
                        <label class="am-radio-inline">
                            <input type="radio" checked="checked" value="0" name="is_admin">否
                        </label>
                    </div>
                    <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
                </form>
            </div>
            <?php echo '<script'; ?>
>
                window.onload = function(){
                    $(function() {
                        $('#doc-form-file').on('change', function() {
                            var fileNames = '';
                            $.each(this.files, function() {
                                fileNames += '<span class="am-badge">' + this.name + '</span> ';
                            });
                            $('#file-list').html(fileNames);
                        });
                    });
                }
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<table class="am-table am-table-bordered am-table-striped am-table-compact" style="text-align: center;">
    <thead>
    <tr>
        <th style="text-align: center">头像</th>
        <th style="text-align: center">用户名</th>
        <th style="text-align: center">姓名</th>
        <th style="text-align: center">电话</th>
        <th style="text-align: center">最后登录时间</th>
        <th style="text-align: center">最后登录ip</th>
        <th style="text-align: center">操作</th>
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

    <tr>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['photo'] == null) {?>
            <td style="vertical-align: middle;text-align: center;width:100px"><img src="./Public/Upload/photo.png" width="80px;" height="80px;" style="border-radius: 40px"></td>
        <?php } else { ?>
            <td style="vertical-align: middle;text-align: center;width:100px"><img src="./Public/Upload/<?php echo $_smarty_tpl->tpl_vars['row']->value['photo'];?>
" width="80px;" height="80px;" style="border-radius: 40px"></td>
        <?php }?>

        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['realname'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['telephone'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['last_login'];?>
</td>
        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['row']->value['last_loginip'];?>
</td>
        <td style="vertical-align: middle;">
            <button
                    type="button"
                    class="am-btn am-btn-primary am-btn-xs"
                    data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
', closeViaDimmer: 0, width: 400, height: 500 }">
                编辑
            </button>
            <a href="index.php?p=Admin&c=members&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
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
$__foreach_row1_2_saved_item = isset($_smarty_tpl->tpl_vars['row1']) ? $_smarty_tpl->tpl_vars['row1'] : false;
$_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
$__foreach_row1_2_saved_local_item = $_smarty_tpl->tpl_vars['row1'];
?>
<!--动态窗口开始-->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row1']->value['member_id'];?>
">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">修改
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd" style="text-align: left;">
                <form class="am-form" action="index.php?p=Admin&c=members&a=update" enctype="multipart/form-data"  method="post">
                    <div>
                        <input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['member_id'];?>
"/>
                        <label for="doc-select-1">用户名</label>
                        <input name="username" type="text" class="am-form-field am-radius" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['username'];?>
" />
                    </div>
                    <div>
                        <label for="doc-select-1">姓名</label>
                        <input name="realname" type="text" class="am-form-field am-radius" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['realname'];?>
" />
                    </div>
                    <div>
                        <label for="doc-select-1">密码</label>
                        <input name="password" type="password" class="am-form-field am-radius"/>
                    </div>
                    <div class="am-form-group">
                        <label for="doc-select-1">部门</label>
                        <select name="group_id">
                            <?php
$_from = $_smarty_tpl->tpl_vars['group']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_gro_3_saved_item = isset($_smarty_tpl->tpl_vars['gro']) ? $_smarty_tpl->tpl_vars['gro'] : false;
$_smarty_tpl->tpl_vars['gro'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['gro']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gro']->value) {
$_smarty_tpl->tpl_vars['gro']->_loop = true;
$__foreach_gro_3_saved_local_item = $_smarty_tpl->tpl_vars['gro'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['gro']->value['group_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row1']->value['group_id'] == $_smarty_tpl->tpl_vars['gro']->value['group_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['gro']->value['name'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['gro'] = $__foreach_gro_3_saved_local_item;
}
if ($__foreach_gro_3_saved_item) {
$_smarty_tpl->tpl_vars['gro'] = $__foreach_gro_3_saved_item;
}
?>
                        </select>
                        <span class="am-form-caret"></span>
                    </div>
                    <div class="am-form-group">
                        是否管理员:
                        <label class="am-radio-inline">
                            <input type="radio" <?php if ($_smarty_tpl->tpl_vars['row1']->value['is_admin'] == 1) {?>checked="checked"<?php }?>  value="1" name="is_admin">是
                        </label>
                        <label class="am-radio-inline">
                            <input type="radio" <?php if ($_smarty_tpl->tpl_vars['row1']->value['is_admin'] == 0) {?>checked="checked"<?php }?> value="0" name="is_admin">否
                        </label>
                    </div>
                    更改头像
                    <input type="file" name="photo"/>
                    <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
                </form>
        </div>
    </div>
</div>
<!--动态窗口结束-->

    <?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_2_saved_local_item;
}
if ($__foreach_row1_2_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_2_saved_item;
}
?>
<!--分页开始-->
<div>
    <div class="am-fr" style="margin-right: 50px">
        <ul class="am-pagination" style="display: inline-block">
             <li <?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=members&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">«</a></li>

             <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - ($_smarty_tpl->tpl_vars['stat']->value) : $_smarty_tpl->tpl_vars['stat']->value-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['stat']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>class="am-active"<?php }?>><a href="index.php?p=Admin&c=members&a=list&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
             <?php }
}
?>

             <li <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="am-disabled"<?php }?>><a href="index.php?p=Admin&c=members&a=list&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
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
        location.href="index.php?p=Admin&c=members&a=list&page="+oIpt+"&search=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
";
    }

<?php echo '</script'; ?>
>

<!--分页结束-->
<?php
}
/* {/block 'content'} */
}
