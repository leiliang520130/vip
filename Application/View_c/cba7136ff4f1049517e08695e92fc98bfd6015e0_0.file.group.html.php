<?php
/* Smarty version 3.1.29, created on 2016-05-10 09:21:22
  from "F:\server\www\leiliang\mtwp\Application\View\Admin\group.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573137920e5a20_19370455',
  'file_dependency' => 
  array (
    'cba7136ff4f1049517e08695e92fc98bfd6015e0' => 
    array (
      0 => 'F:\\server\\www\\leiliang\\mtwp\\Application\\View\\Admin\\group.html',
      1 => 1462843256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573137920e5a20_19370455 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_488573137920c27a4_13547638',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:group.html */
function block_488573137920c27a4_13547638($_smarty_tpl, $_blockParentStack) {
?>

<ol class="am-breadcrumb">
    <li><a href="#" class="am-icon-home">首页</a></li>
    <li><a href="#">分类</a></li>
    <li class="am-active">内容</li>
</ol>
<div style="width: 500px;margin-left: 10px">
    <div id="" style="margin-left: 20px; width: 800px;">
        <button
                type="button"
                class="am-btn am-btn-primary am-btn-xs"
                data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 450 }">
            添加分类
        </button>
        <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">添加分类
                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                </div>
                <div class="am-modal-bd">
                    <form class="am-form" action="index.php?p=Admin&c=Category&a=insert" method="post">
                        <div>
                            <label for="doc-select-1">分类名称</label>
                            <input name="cateName" type="text" class="am-form-field am-radius" placeholder="" />
                        </div>
                        <div class="am-form-group">
                            <label for="doc-select-1">上一级分类</label>
                            <select id="doc-select-1" name="parent_id">
                                <option value="0">顶级分类</option>
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['group_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
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
                        <div class="am-form-group">
                            <label for="doc-ta-1">描述</label>
                            <textarea name="intro" class="" rows="5" id="doc-ta-1" style="resize:none"></textarea>
                        </div>
                        <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="am-table am-table-bordered am-table-radius am-table-striped">
        <thead>
        <tr>
            <th>分类名称</th>
            <th>父编号</th>
            <th>操作</th>
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
            <td>

            <?php echo $_smarty_tpl->tpl_vars['row']->value['level'];?>


                <i class="fa fa-minus-square" aria-hidden="true"></i>

            <?php echo $_smarty_tpl->tpl_vars['row']->value['cateName'];?>


            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['parent_id'];?>
</td>
            <td>
                <a href="index.php?p=Admin&c=Category&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                    <button class="am-btn am-btn-primary am-btn-xs">编辑</button>
                </a>
                <a href="index.php?p=Admin&c=Category&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
</div>
<?php
}
/* {/block 'content'} */
}
