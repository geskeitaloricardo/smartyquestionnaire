<?php
/* Smarty version 3.1.36, created on 2020-08-06 23:12:44
  from '/Users/italoricardogeske/smartyProj/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2c0fdca5a821_24916900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14d5e921339076f05317dc5eb0a2304d56cbaec9' => 
    array (
      0 => '/Users/italoricardogeske/smartyProj/templates/index.tpl',
      1 => 1596723161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f2c0fdca5a821_24916900 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<?php echo '<script'; ?>
 href="../vendor/twbs/bootstrap/dist/js/bootstrap.js"><?php echo '</script'; ?>
>

<?php ob_start();
echo @constant('MY_TITLE');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_title'=>$_prefixVariable1), 0, false);
?>

<div class="container">
  <?php if ((isset($_smarty_tpl->tpl_vars['is_correct']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['is_correct']->value) {?>
      <div class="alert alert-success mt-4" role="alert">
        Correct answer
      </div>
    <?php } else { ?>
      <div class="alert alert-danger mt-4" role="alert">
        Wrong answer
      </div>
    <?php }?>
  <?php }?>
  <div class="card">
    <div class="card-header">
      <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

    </div>
    <div class="card-body">
      <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</p>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answers']->value, 'answer');
$_smarty_tpl->tpl_vars['answer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->do_else = false;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['answer']->value))) {?>
          <form action="/question">
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
" name="answer">
            <button class="btn btn-light btn-block"><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</button>
          </form>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <p class="card-text">Score: <?php echo $_smarty_tpl->tpl_vars['score']->value;?>
</p>
    </div>
  </div>
</div><?php }
}
