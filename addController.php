<?php 

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller
class AddController extends AjaxController {
    public function __construct() {
        parent::__construct();

        // Save User
        // $user = User::insert($_POST);

        // $added = $_POST['addChecked'] == 'true' ? 'now()' : 'NULL'; //this was from DoneController 

        //UPDATE STATEMENT TO DATABASE
        //set done as done or set done as null(unchecked)
        //whatever I pass in set value of done as NOW() 
        $add = "UPDATE chore_user SET user_id = 3 
               WHERE id = {$_POST['cu_user_id']}";//this was from DoneController

        $results = db::execute($add);//this was from DoneController


        // In the case of the Ajax Controller, the view is an array
        // which can can be accessed as follows. This array will be
        // converted to JSON when this script ends and sent to the client
        // automatically
        $this->view['response'] = 1;

    }

}
$acontroller = new AddController();