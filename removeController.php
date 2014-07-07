<?php 

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller adds extra chores to user's daily chore list
class RemoveController extends AjaxController {
    public function __construct() {
        parent::__construct();

        // Save User
        // $user = User::insert($_POST);

        //DELETE STATEMENT TO DATABASE
        $removeChore = $_POST['cu_user_id'];

        $removeThisChore = $_POST['c_id'];


        $sql = "DELETE FROM chore WHERE id = $removeThisChore";

        $results = db::execute($sql);


        // $sql = "SELECT chore_id FROM chore_user WHERE id=$removeChore";

        // $results = db::execute($sql);


        $removeChoreRow = "DELETE FROM chore_user WHERE chore_id = $removeThisChore";


        $results = db::execute($removeChoreRow);


        // In the case of the Ajax Controller, the view is an array
        // which can can be accessed as follows. This array will be
        // converted to JSON when this script ends and sent to the client
        // automatically
        $this->view['response'] = 1;

    }

}
$rcontroller = new removeController();