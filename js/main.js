/**
 * Application JS
 */
;$(function() {

    $('.summary2').hide()

    $('.refresh').click(function(){
        $('.summary').hide();
        $('.summary2').show();
    });
    console.log ('testing');

    // creating chores on assign page

    $('.newChoreAdd').click(function(){

        var created = {

            chore: $('.chore').val(),
            choreType: $(this).siblings('.choreType').val(),
            dayDue: $('.dayDue').val(),
            valueEarn: $('.valueEarn').val(),
            bonus: $(this).prev().val()

        }

        $.ajax({
            url: "myController.php",
            cache: false,
            dataType: 'json',
            type: 'POST',
            data: created,
            error: function(data){
                console.log(data + "This is an error");
            },
            success: function(data) {
                location.reload();
            }

        });  
    });

    //assign chore to user on assign page

    $('.assign').click(function(){
        var assignChore;


        var added = {
            
            assignChore: assignChore,
            cu_user_id: $(this).next().val(),
            assign_user: $(this).prev('.famName').val()

        }

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
                location.reload();
            }

        });  
    });


    // once click on add - add to users chore list and in database use AJAX to reload page

    $('.add').click(function(){


        var abby = $(this).parent().parent().parent().attr('class')
            if(abby == 'abbyExtra'){
                setUser_id = 4
            }else {
                setUser_id = 3
            }
          
        var added = {
            
            abby: setUser_id,
            cu_user_id: $(this).next().val()

        }

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
                location.reload();
            }

        });

    });
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

    //delete chore from chore list on assign page

    $('.removeChore').click(function(){ 
        
        $(this).parent().parent().remove();

        var removeChore

        var removed = {
            removeChore: removeChore,
            cu_user_id: $(this).prev().val(),
            c_id: $(this).next().val()
        }

        $.ajax({
            url: 'removeController.php',
            cache: false,
            dataType: 'json',
            type: 'POST',
            data: removed,
            error: function(data){
                console.log(data + "Nope, it is an error");
            },
            success: function(data) {
                console.log(data + "Success YES!");
            }

        }); 

    });

    $('.removeAssignedChore').click(function(){ 
        
        $(this).parent().parent().remove();
        
        var removeChore

        var removed = {
            removeChore: removeChore,
            cu_user_id: $(this).prev().val(),
            c_id: $(this).next().val()
        }

        $.ajax({
            url: 'removeOneController.php',
            cache: false,
            dataType: 'json',
            type: 'POST',
            data: removed,
            error: function(data){
                console.log(data + "Nope, it is an error");
            },
            success: function(data) {
              
            }

        }); 

    });
});