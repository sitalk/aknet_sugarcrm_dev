<input type='hidden' name='{{sugarvar key='name'}}' id="{{sugarvar key='name'}}-value" 

    value='{{sugarvar key='value'}}'>
    

<input id="{{sugarvar key='name'}}-input" value='{sugar_dictionary table={{$vardef.ext1}} idField={{$vardef.ext2}} nameField={{$vardef.ext3}} value={{sugarvar key=value string=true}} }' data-name="{{sugarvar key='name'}}"/>
        
<span>{{$vardef.module_name_input}}</span>        
{sugar_getscript file="cache/include/javascript/sugar_grp_quickcomp.js"}
{sugar_getscript file="custom/include/jquery/ui/jquery-ui.js"}
<script language='javascript'>
var field = $( "#{{sugarvar key='name'}}-input") ;
var moduleName = "{{$vardef.module_name_input}}";

{literal}
$.ui.autocomplete.prototype._renderItem = function (ul, item) {
            
            return $("<li></li>")
                    .data("item.autocomplete", item)
                    .append("<a>" + item.label + "</a>")
                    .appendTo(ul);
        };
field.autocomplete({
    source: function( request, response ) {
        var value = $('#' + $(this.element).data('name') + '-input').val();
        var query = {"module":moduleName,"field_list":['id','name'],
            "conditions":[{"name":"name","op":"like","value":'%' + value}]};
        var result = global_rpcClient.call_method('query',query,true);
        var data = $.map(result.list, function(item) {
            return {
                label: item.fields.name,
                value: item.fields.id
            };
        });
        data.push({label: '<input type="button" name="btn_name_field" id="btn_name_field" title="Create" class="button firstChild" value="Добавить новый">'});
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
//Opening the popup
$(document).on("click", "#btn_name_field", function () {
    open_popup("Aknet_House", 400, 180, "", true, false,  {"call_back_function":"set_return","form_name":"EditView"}, "single", true );
});
{/literal}
</script>

