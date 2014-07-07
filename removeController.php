<?php 

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller adds extra chores to user's daily chore list
class RemoveController extends AjaxController {
    public function __construct() {
        parent::__construct();

        // Save User
        // $user = User::insert($_POST);

        //UPDATE STATEMENT TO DATABASE
        //set done as done or set done as null(unchecked)
        //whatever I pass in set value of done as NOW() 
        $remove = "DELETE FROM chore_user 
               WHERE id = {$_POST['cu_user_id']}";

        $results = db::execute($remove);


        // In the case of the Ajax Controller, the view is an array
        // which can can be accessed as follows. This array will be
        // converted to JSON when this script ends and sent to the client
        // automatically
        $this->view['response'] = 1;

    }

}
$rcontroller = new removeController();