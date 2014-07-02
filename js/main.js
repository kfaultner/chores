/**
 * Application JS
 */
;$(function() {

    $('.done').change(function(){ 
        var addChecked;

        if ($(this).is(':checked')){
            
            var addChecked = true;
            console.log ('checked');


        }else {
            
            var addChecked = false;
            console.log('not checked');

        }

        var checked = {
            
            addChecked: addChecked,
            chore_user_id: $(this).next().val()

        };

        $.ajax({
            url: "doneController.php",
            cache: false,
            dataType: 'json',
            type: 'POST',
            data: checked,
            error: function(data){
                console.log(data + "hello data");
            },
            success: function(data) {
                console.log(data + "success!");
            }

        });

    });

});