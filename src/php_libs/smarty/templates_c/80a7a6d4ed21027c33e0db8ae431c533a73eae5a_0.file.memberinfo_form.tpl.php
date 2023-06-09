<?php
/* Smarty version 3.1.30, created on 2023-05-29 05:28:12
  from "/var/www/html/php_libs/smarty/templates/memberinfo_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_647437ec69cf68_65517150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80a7a6d4ed21027c33e0db8ae431c533a73eae5a' => 
    array (
      0 => '/var/www/html/php_libs/smarty/templates/memberinfo_form.tpl',
      1 => 1685336600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647437ec69cf68_65517150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo '<script'; ?>
 type="text/javascript" src="js/quickform.js" async><?php echo '</script'; ?>
>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong>
<hr>
    <table>
      <tr>
      <td style="vertical-align: top;">
	[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
">トップページへ</a> ]
<?php if (($_smarty_tpl->tpl_vars['is_system']->value)) {?>
	<br><br>
      	[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">会員一覧</a> ]
<?php }?>
	<br><br>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

      </td>
      <td>
	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
          <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

          <table>
            <tr>
              <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
：</td>
              <td style="text-align:left;">
                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['username']['error'])) {?>
                  <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['error'];?>
</div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>
</td>
            </tr>
            <tr>
              <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
：</td>
              <td style="text-align:left;">
                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['password']['error'])) {?>
                  <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['error'];?>
</div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>
</td>
            </tr>
            <tr>
              <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['label'];?>
：</td>
              <td style="text-align:left;">
                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['last_name']['error'])) {?>
                  <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['error'];?>
</div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['html'];?>
</td>
            </tr>
            <tr>
              <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['label'];?>
：</td>
              <td style="text-align:left;">
                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['first_name']['error'])) {?>
                  <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['error'];?>
</div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['html'];?>
</td>
            </tr>
            <tr>
              <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['label'];?>
：</td>
              <td style="text-align:left;">
                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['birthday']['error'])) {?>
                  <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['error'];?>
</div><br>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['Y']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['birthday']['m']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['birthday']['d']['html'];?>
</td>
            </tr>
            <tr>
              <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['label'];?>
：</td>
              <td style="text-align:left;">
                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['ken']['error'])) {?>
                <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['error'];?>
</div><br>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['html'];?>
</td>
            </tr>
            <tr>
            <td>&nbsp; </td>
            <td>
            <?php if (($_smarty_tpl->tpl_vars['form']->value['submit2']['attribs']['value'] != '')) {?>
              <?php echo $_smarty_tpl->tpl_vars['form']->value['submit2']['html'];?>
　
            <?php } else { ?>
              <?php echo $_smarty_tpl->tpl_vars['form']->value['reset']['html'];?>
　
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>

            <input type="hidden" name="type"   value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
            </td>
            </tr>
          </table>
          <br>
        </form>
        </td>
      </tr>
    </table>
</div>
<?php if ($_smarty_tpl->tpl_vars['form']->value['javascript']) {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['javascript'];?>

<?php }
if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
</body>
</html><?php }
}
