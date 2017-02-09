<?php /* Smarty version Smarty-3.1.19, created on 2017-02-09 08:26:24
         compiled from "/Applications/MAMP/htdocs/prestashop/admin952n40tye/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:642076944589c19a0674fe2-70607944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3782c17d3b75e059a7be6deceede0c6b54908a7' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin952n40tye/themes/default/template/content.tpl',
      1 => 1482157020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '642076944589c19a0674fe2-70607944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589c19a067ded7_14166490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589c19a067ded7_14166490')) {function content_589c19a067ded7_14166490($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
