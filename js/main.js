/**
 * Application JS
 */
;$(function() {

    //once chore is checked, add to table chore_user with date_completed

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
                
            }

        });

    });
    // once click on add - add to users chore list and in database use AJAX to reload page

    $('.add').click(function(){
        var addChore;


        var added = {
            
            addChore: addChore,
            cu_user_id: $(this).next().val()

        };

        $.ajax({
            url: "addController.php",
            cache: false,
            dataType: 'json',
            type: 'POST',
            data: added,
            error: function(data){
                console.log(data + "This is an error");
            },
            success: function(data) {
                // console.log(data + "Success is mine!");
                location.reload();
            }

        });

    });
    $('.assign').click(function(){
            var assignChore;


            var added = {
                
                assignChore: assignChore,
                cu_user_id: $(this).next().val(),
                assign_user: $(this).prev('.famName').val()

            }
            // console.log(cu_user_id);

            $.ajax({
                url: "assignController.php",
                cache: false,
                dataType: 'json',
                type: 'POST',
                data: added,
                error: function(data){
                    console.log(data + "This is an error");
                },
                success: function(data) {
                    console.log(data + "Success is mine!");
                    // location.reload();
                }

            });  
    });

});