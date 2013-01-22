<?php /* Smarty version 2.6.11, created on 2013-01-11 14:20:08
         compiled from custom/modules/DynamicFields/templates/Fields/Forms/dictionary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'custom/modules/DynamicFields/templates/Fields/Forms/dictionary.tpl', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
   ?>
<tr>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_MODULE_NAME'), $this);?>
:</td>
    <td>
    <?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
    <input type="text" name="comments" value="<?php echo $this->_tpl_vars['vardef']['module_name_input']; ?>
">
    <?php else: ?>
    <input type="hidden" name="comments" value="<?php echo $this->_tpl_vars['vardef']['module_name_input']; ?>
"><?php echo $this->_tpl_vars['vardef']['module_name_input']; ?>

    <?php endif; ?>
    </td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_ID_COLUMN'), $this);?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input type='text' name='id_column' id='dictionary_id_column' value='<?php echo $this->_tpl_vars['vardef']['ext2']; ?>
'>
	<?php else: ?>
		<input type='hidden' name='id_column' id='dictionary_id_column' value='<?php echo $this->_tpl_vars['vardef']['ext2']; ?>
'><?php echo $this->_tpl_vars['vardef']['ext2']; ?>

	<?php endif; ?>
	</td>
</tr>

<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'LBL_NAME_COLUMN'), $this);?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input type='text' name='name_column' id='dictionary_name_column' value='<?php echo $this->_tpl_vars['vardef']['ext3']; ?>
'>
	<?php else: ?>
		<input type='hidden' name='name_column' id='dictionary_name_column' value='<?php echo $this->_tpl_vars['vardef']['ext3']; ?>
'><?php echo $this->_tpl_vars['vardef']['ext3']; ?>

	<?php endif; ?>
	</td>
</tr>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>