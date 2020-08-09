<?php
/* Smarty version 3.1.36, created on 2020-08-06 23:16:12
  from '/Users/italoricardogeske/smartyProj/templates/final.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2c10ac854503_19909667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5458e162d074fe52ec3a7456a1f071e2acaa6cdf' => 
    array (
      0 => '/Users/italoricardogeske/smartyProj/templates/final.tpl',
      1 => 1596723191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f2c10ac854503_19909667 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<?php echo '<script'; ?>
 href="../vendor/twbs/bootstrap/dist/js/bootstrap.js"><?php echo '</script'; ?>
>

<?php ob_start();
echo @constant('MY_TITLE');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_title'=>$_prefixVariable1), 0, false);
?>

<div class="container">
    <div class="card mt-4">
        <div class="card-body">
        <p class="card-text">Final Score: <?php echo $_smarty_tpl->tpl_vars['final_score']->value;?>
</p>
    </div>
</div><?php }
}
