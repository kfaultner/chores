<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller
class ManageController extends AppController {
    public function __construct() {
        parent::__construct();

        function getManageChores(){
            $sql = "SELECT c.name, c.day_due, c.point_value, c.monetary_value, cu.id as cu_id
                    FROM chore as c, chore_user as cu
                    WHERE family_id = 1
                    AND c.id = cu.chore_id 
                    ORDER BY FIELD(c.day_due, 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')";

            $results = db::execute($sql);

            $manageChores = [];

            while($row = $results->fetch_assoc()){
                array_push($manageChores,$row);
            }

            return ($manageChores);
        }
            
        $manageChores = "";
        $html = "";
        $famChores = getManageChores();

        foreach($famChores as $chore_f){

            $html .= "<tr>
                    <td>{$chore_f['name']}</td>
                    <td>{$chore_f['day_due']}</td>
                    <td>{$chore_f['point_value']}</td>
                    <td>{$chore_f['monetary_value']}</td>
                    <td>
                        <select name='family' class='famName'>
                            <option value='1'>Dustin</option>
                            <option value='2'>Kris</option>
                            <option value='3'>Emily</option>
                            <option value='4'>Abby</option>
                        </select>
                        <button class='assign'$add>Add</button>
                        <input type='hidden' name='cu_user_id' value='{$chore_f['cu_id']}'>
                    </td>
                    </tr>";
        }
          
            $manageChores .= $html;


        // Create welcome variable in view
        $this->view->welcome = 'FAULTNER FAMILY CHORES';

        $this->view->manageChores = $manageChores;

        //Antime we pass variables into ANY VIEW start with $this->view->createVariable
    }

}
$mcontroller = new manageController();

// Extract Main Controler Vars
extract($mcontroller->view->vars);

?>

<body>

    <div class="page">
        <h1> <?php echo $welcome; ?>
        </h1>
        <div class="assignChores">
            <h2>Chores</h2>
             <table>
                <thead>    
                    <tr>
                        <th>Chore</th>
                        <th>Due by</th>
                        <th>Points</th>
                        <th>Money</th>
                        <th>Assign to</th>
                            
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php echo $manageChores; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>