{include file="modules/DynamicFields/templates/Fields/Forms/coreTop.tpl"}
<tr>
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_MODULE_NAME"}:</td>
    <td>
    {if $hideLevel < 5 }
    <input type="text" name="module_name_input" value="{$vardef.module_name_input}">
    {else}
    <input type="hidden" name="module_name_input" value="{$vardef.module_name_input}">{$vardef.module_name_input}
    {/if}
    </td>

</tr>

<tr>
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_TABLE"}:</td>
    <td>
    {if $hideLevel < 5}
        <input type='text' name='table' id='dictionary_table' value='{$vardef.ext1}'>
    {else}
        <input type='hidden' name='table' id='dictionary_table' value='{$vardef.ext1}'>{$vardef.ext1}
    {/if}
    </td>
</tr>

<tr>
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_ID_COLUMN"}:</td>
    <td>
    {if $hideLevel < 5}
        <input type='text' name='id_column' id='dictionary_id_column' value='{$vardef.ext2}'>
    {else}
        <input type='hidden' name='id_column' id='dictionary_id_column' value='{$vardef.ext2}'>{$vardef.ext2}
    {/if}
    </td>
</tr>

<tr>
    <td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_NAME_COLUMN"}:</td>
    <td>
    {if $hideLevel < 5}
        <input type='text' name='name_column' id='dictionary_name_column' value='{$vardef.ext3}'>
    {else}
        <input type='hidden' name='name_column' id='dictionary_name_column' value='{$vardef.ext3}'>{$vardef.ext3}
    {/if}
    </td>
</tr>
{include file="modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl"}
