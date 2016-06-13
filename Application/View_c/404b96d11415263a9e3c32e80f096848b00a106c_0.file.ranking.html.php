<?php
/* Smarty version 3.1.29, created on 2016-05-16 23:26:43
  from "F:\server\www\leiliang\mtwp\Application\View\Home\ranking\ranking.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5739e6b3817ed6_80928967',
  'file_dependency' => 
  array (
    '404b96d11415263a9e3c32e80f096848b00a106c' => 
    array (
      0 => 'F:\\server\\www\\leiliang\\mtwp\\Application\\View\\Home\\ranking\\ranking.html',
      1 => 1463412398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_5739e6b3817ed6_80928967 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_266735739e6b376ff36_13478708',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:ranking/ranking.html */
function block_266735739e6b376ff36_13478708($_smarty_tpl, $_blockParentStack) {
?>

<!--    <div  style="text-align: center">
<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <caption >充值排行榜</caption>
    <thead>
    <tr>
        <th>排名</th>
        <th>姓名</th>
        <th>金额</th>
    </tr>
    </thead>
    <tbody>
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
    <div style="text-align: center">
<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <caption>消费排行榜</caption>
    <thead>
    <tr>
        <th>排名</th>
        <th>姓名</th>
        <th>金额</th>
    </tr>
    </thead>
    <tbody>
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
    <div style="text-align: center">
<table class="am-table am-table-bordered am-table-radius am-table-striped">
    <caption>服务之星</caption>
    <thead>
    <tr>
        <th>排名</th>
        <th>姓名</th>
        <th>次数</th>
    </tr>
    </thead>
    <tbody>
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
    </div>-->

<!--排行榜开始-->
<div style="height: 350px;margin-left: 20px">
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
$__foreach_row_3_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_3_saved_local_item = $_smarty_tpl->tpl_vars['row'];
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
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved_local_item;
}
if ($__foreach_row_3_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved_item;
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
$__foreach_row_4_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_4_saved_local_item = $_smarty_tpl->tpl_vars['row'];
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
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved_local_item;
}
if ($__foreach_row_4_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_4_saved_item;
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
$__foreach_row_5_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_5_saved_local_item = $_smarty_tpl->tpl_vars['row'];
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
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_5_saved_local_item;
}
if ($__foreach_row_5_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_5_saved_item;
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
