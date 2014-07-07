<?php 

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller that adds date completed once chore is checked. 
class DoneController extends AjaxController {
    public function __construct() {
        parent::__construct();

        // Save User
        // $user = User::insert($_POST);

        $checked = $_POST['addChecked'] == 'true' ? 'now()' : 'NULL'; 

        //UPDATE STATEMENT TO DATABASE
        //set done as done or set done as null(unchecked)
        //whatever I pass in set value of done as NOW() 
        $update = "UPDATE chore_user SET date_completed = $checked 
                   WHERE id = {$_POST['chore_user_id']}";

        $results = db::execute($update);


        // In the case of the Ajax Controller, the view is an array
        // which can can be accessed as follows. This array will be
        // converted to JSON when this script ends and sent to the client
        // automatically
        $this->view['response'] = 1;

    }

}
$dcontroller = new DoneController();