jQuery(function($) {
    $("cdswebinar_ing").bind( "data",function() {
        $(this).datait("readonly", true);

        var formObj         = {
            action:         "r_data_cdswebinar",
            rid:            $(this).data("rid"),
            rating:         $(this).datait("value")
        }

        console.log(formObj);
        // $.post( cdswebinar_obj.ajax_url, formObj, function(data) {
        //     console.log(data);
        // });
    });
});