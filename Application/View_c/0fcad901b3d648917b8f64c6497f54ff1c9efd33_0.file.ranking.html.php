<?php
/* Smarty version 3.1.29, created on 2016-05-13 15:56:56
  from "F:\web\baidu\matao\Application\View\Admin\ranking\ranking.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573588c860cc67_47785774',
  'file_dependency' => 
  array (
    '0fcad901b3d648917b8f64c6497f54ff1c9efd33' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\ranking\\ranking.html',
      1 => 1463126207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573588c860cc67_47785774 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_13167573588c85dac96_22745787',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:ranking/ranking.html */
function block_13167573588c85dac96_22745787($_smarty_tpl, $_blockParentStack) {
?>

<!--排行榜开始-->
<div style="height: 350px;margin-left: 60px">
    <div style="height:300px;width: 300px;float: left;margin-right: 40px;">
        <div class="am-panel am-panel-default">
            <div class="am-panel-hd am-cf" data-am-collapse="{ target: '#collapse-panel-2' }">充值排行榜<span class="am-icon-chevron-down am-fr" ></span></div>
            <div id="collapse-panel-2" class="am-in">
                <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
                    <tbody>
                    <tr>
                        <th>排名</th>
                        <th>姓名</th>
                        <th>金额</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['rowr']->value;
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
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['sum'];?>
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
            </div>
        </div>
    </div>
    <div style="height:300px;width: 300px;float: left;margin-right: 40px;">
        <div class="am-panel am-panel-default">
            <div class="am-panel-hd am-cf" data-am-collapse="{ target: '#collapse-panel-3' }">消费排行榜<span class="am-icon-chevron-down am-fr" ></span></div>
            <div id="collapse-panel-3" class="am-in">
                <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
                    <tbody>
                    <tr>
                        <th>排名</th>
                        <th>姓名</th>
                        <th>金额</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['rowc']->value;
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
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['sum'];?>
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
        </div>
    </div>
    <div style="height:300px;width: 300px;float: left;margin-right: 20px;">
        <div class="am-panel am-panel-default">
            <div class="am-panel-hd am-cf" data-am-collapse="{ target: '#collapse-panel-4' }">服务之星<span class="am-icon-chevron-down am-fr" ></span></div>
            <div id="collapse-panel-4" class="am-in">
                <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
                    <tbody>
                    <tr>
                        <th>排名</th>
                        <th>姓名</th>
                        <th>次数</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['row2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_2_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_2_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['COUNT(member_id)'];?>
</td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_local_item;
}
if ($__foreach_row_2_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_2_saved_item;
}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!--排行榜结束-->
<?php
}
/* {/block 'content'} */
}
