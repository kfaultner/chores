<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller
class Controller extends AppController {
    public function __construct() {
        parent::__construct();

        function getAllChores(){
            $sql = "SELECT * FROM chore
                    ORDER BY FIELD(day_due, 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')";

            $results = db::execute($sql);

            $allChores = [];

            while($row = $results->fetch_assoc()){
                array_push($allChores,$row);
            }

            return ($allChores);
        }
            
        $allChores = "";
        $html = "";
        $famChores = getAllChores();

        foreach($famChores as $chore_f){

            $html .= "<tr>
                    <td>{$chore_f['name']}</td>
                    <td>{$chore_f['day_due']}</td>
                    <td>{$chore_f['point_value']}</td>
                    <td>{$chore_f['monetary_value']}</td>
                    <td>
                        <select name='family' id=''>
                            <option value=''>Dustin</option>
                            <option value=''>Kris</option>
                            <option value=''>Emily</option>
                            <option value=''>Abby</option>
                        </select>
                    </td>
                    <td><button class='asign' type='button' $add>Add</button></td>
                    </tr>";
        }
          
            $allChores .= $html;


        // Create welcome variable in view
        $this->view->welcome = 'FAULTNER FAMILY CHORES';

        $this->view->allChores = $allChores;

        //Antime we pass variables into ANY VIEW start with $this->view->createVariable
    }

}
$controller = new Controller();

// Extract Main Controler Vars
extract($controller->view->vars);

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
                        <?php echo $allChores; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>