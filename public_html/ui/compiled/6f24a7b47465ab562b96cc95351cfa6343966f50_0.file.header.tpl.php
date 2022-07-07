<?php
/* Smarty version 3.1.39, created on 2022-05-29 22:46:00
  from '/home/fatura.suainformatica.com.br/public_html/ui/theme/ibilling/sections/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62942fe8db2ac7_55655917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f24a7b47465ab562b96cc95351cfa6343966f50' => 
    array (
      0 => '/home/fatura.suainformatica.com.br/public_html/ui/theme/ibilling/sections/header.tpl',
      1 => 1621315198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62942fe8db2ac7_55655917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
