<?php 

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller
class AssignController extends AjaxController {
    public function __construct() {
        parent::__construct();

        // Save User
        // $user = User::insert($_POST);

        // $added = $_POST['addChecked'] == 'true' ? 'now()' : 'NULL'; //this was from DoneController 

        $assign_user = $_POST['assign_user'];
        //UPDATE STATEMENT TO DATABASE
      
        $add = "UPDATE chore_user SET user_id = $assign_user 
               WHERE id = {$_POST['cu_user_id']}";

        $results = db::execute($add);//this was from DoneController


        // In the case of the Ajax Controller, the view is an array
        // which can can be accessed as follows. This array will be
        // converted to JSON when this script ends and sent to the client
        // automatically
        $this->view['response'] = 1;

    }

}
$assigncontroller = new AssignController();