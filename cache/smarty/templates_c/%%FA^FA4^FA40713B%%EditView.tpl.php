<?php /* Smarty version 2.6.11, created on 2013-01-07 09:38:06
         compiled from custom/include/SugarFields/Fields/Dictionary/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'custom/include/SugarFields/Fields/Dictionary/EditView.tpl', 1, false),)), $this); ?>
<input type='hidden' name='<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
' id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
-value" 
    value='<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
'>
    

<input id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
-input" value='{sugar_dictionary 
        table=<?php echo $this->_tpl_vars['vardef']['ext1']; ?>
 idField=<?php echo $this->_tpl_vars['vardef']['ext2']; ?>
 nameField=<?php echo $this->_tpl_vars['vardef']['ext3']; ?>

        value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }' 
        data-name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"/>
        
{sugar_getscript file="cache/include/javascript/sugar_grp_quickcomp.js"}
{sugar_getscript file="custom/include/jquery/ui/jquery-ui.js"}
<script language='javascript'>
var field = $( "#<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
-input") ;

{literal}
$[ "ui" ][ "autocomplete" ].prototype["_renderItem"] = function( ul, item) {
return $( "<li></li>" ) 
  .data( "item.autocomplete", item )
  .append( $( "<a></a>" ).html( item.label ) )
  .appendTo( ul );
};
field.autocomplete({
    source: function( request, response ) {
        var value = $('#' + $(this.element).data('name') + '-input').val();
        var query = {"module":"Aknet_Street","field_list":['id','name'],
            "conditions":[{"name":"name","op":"like","value":'%' + value}]};
        var result = global_rpcClient.call_method('query',query,true);
        var data = $.map(result.list, function(item) {
            return {
                label: item.fields.name,
                value: item.fields.id
            };
        });
        data.push({label: '<input type="button" name="btn_name_field" id="btn_name_field" title="Create" class="button firstChild" value="Добавить новый" onclick=\'open_popup("Aknet_House", 400, 180, "", true, false,  {"call_back_function":"set_return","form_name":"EditView"}, "single", false )\'>'}); 
        response(data);
    },
    minLength: 2,
    select: function(e, ui) {
        if (ui.item) {
            $('#' + $(this).data('name') + '-input').val(ui.item.label);
            $('#' + $(this).data('name') + '-value').val(ui.item.value);
            return false;
        }
    }
    
});
{/literal}
</script>
