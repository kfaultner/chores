<?php 

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller for assign page to add created chores
class MyController extends AjaxController {
    public function __construct() {
        parent::__construct();

        // Save User
        // $user = User::insert($_POST);

//******need to change select statement to be able to put in value for money chores
        
        //UPDATE STATEMENT TO DATABASE

        $pointChore = 
            "INSERT INTO 
            chore (family_id, chore_type_id, name, day_due, point_value, bonus)
            VALUES 
            (1, '{$_POST['choreType']}', '{$_POST['chore']}', '{$_POST['dayDue']}', {$_POST['valueEarn']}, {$_POST['bonus']})";
    

        $results = db::execute($pointChore);

        $newChoreId = db::last_insert_id();

        $addNewChoreId = 
            "INSERT INTO
            chore_user (chore_id) VALUES ($newChoreId)";

        $results = db::execute($addNewChoreId);

        // In the case of the Ajax Controller, the view is an array
        // which can can be accessed as follows. This array will be
        // converted to JSON when this script ends and sent to the client
        // automatically
        $this->view->$pointChore;
        $this->view['response'] = 1;

    }

}
$mycontroller = new MyController();