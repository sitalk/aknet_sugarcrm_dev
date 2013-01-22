<div class='switch_field'>
    <input type='hidden' id='{{$displayParams.switch_field}}' name='{{$displayParams.switch_field}}' value='{{$displayParams.switch_id}}'>
    <div class='switch_field_browse' id='switch_field_browse_{{$displayParams.switch_field}}'>
        <input type='button' value='Browse'>
    </div>
    <div class='switch_field_name' id='switch_field_name_{{$displayParams.switch_field}}'>{{$displayParams.switch_name}}</div>
</div>
{literal}
<script language='javascript'>
    $('#switch_field_browse_{{$displayParams.switch_field}} input').click(function() {
        var switchid = $('#{{$displayParams.switch_field}}').val().trim();
        var nas_node_id = switchid > 0 ? "&nas_node_id=" + switchid : "";
        var creds = "&username=tima&password=temir123";
        var dialog = window.open("http://212.112.96.50/cake/nodeny_nas_nodes/select?src=http://212.112.96.50" + nas_node_id + creds,
            "Switch Selector", "width=600,height=500,toolbar=0,resizable=0,location=0,menubar=0,scrollbars=0,status=0,directories=0");
        dialog.parentForm = this;
        $(window).on("message", function(e) {
            var data = e.originalEvent.data;
            $('#switch_field_name_{{$displayParams.switch_field}}').html(data.description);
            $('#{{$displayParams.switch_field}}').val(data.id);
        });
    });
</script>
{/literal}
