<?php 

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller adds extra chores to user's daily chore list
class RemoveController extends AjaxController {
    public function __construct() {
        parent::__construct();

        //DELETE STATEMENT TO DATABASE
        $removeChore = $_POST['cu_user_id'];

        $removeThisChore = $_POST['c_id'];

        $removeChoreRow = "UPDATE chore_user SET user_id = NULL
                            WHERE chore_id = $removeThisChore";

        $results = db::execute($removeChoreRow);

        // In the case of the Ajax Controller, the view is an array
        // which can can be accessed as follows. This array will be
        // converted to JSON when this script ends and sent to the client
        // automatically
        $this->view['response'] = 1;

    }

}
$rcontroller = new removeController();