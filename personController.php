<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller
class PersonController extends AppController {
    public function __construct() {
        parent::__construct();

       //insert sql query here
        function getAllChoresForUser($user_id){
            
            $sql = "SELECT c.name, c.day_due, c.point_value, c.monetary_value, c.bonus, 
                    cu.id as cu_id, cu.date_completed 
                FROM chore as c, chore_user as cu 
                WHERE c.id = cu.chore_id 
                AND cu.user_id = 3
                ORDER BY c.bonus ASC, c.name DESC";

            $results = db::execute($sql);

            $chores = [];


            while($row = $results->fetch_assoc()){

                array_push($chores,$row);

            }

            return ($chores);
        }
       
        function getChoresForDay($chores,$day){
            $chores_for_day = [];
            foreach ($chores as $chore) {
                
                if($chore['day_due'] == $day || $chore['day_due'] == 'All'){
                    array_push($chores_for_day, $chore);
                }
            }
            
            return($chores_for_day);
        }

            $allChores = "";
            $html = "";
            $chores = getAllChoresForUser($user_id);
            $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

            foreach($days as $day){
                $chores_for_day = getChoresForDay($chores,$day);
                // print_r($chores_for_day); this worked, it printed out each day of chores
                $html = "
                <div class='day'>$day
                    <table>
                        <thead>    
                            <tr>
                                <th>Chore</th>
                                <th>Points</th>
                                <th>Money</th>
                                <th>Done</th>
                            </tr>
                        </thead><tbody>";

                foreach($chores_for_day as $chore_d){
                    // print_r($chore_d);
                    $checked = $chore_d['date_completed'] ? 'checked' : '';
                    $html .= "<tr>
                        <td>{$chore_d['name']}</td>
                        <td>{$chore_d['point_value']}</td>
                        <td>{$chore_d['monetary_value']}</td>
                        <td><input class='done' type='checkbox' $checked>
                            <input type='hidden' name='chore_user_id' value='{$chore_d['cu_id']}'></td>
                        </tr>";

                }
                
                $html .= "</tbody></table></div>";
                $allChores .= $html;
            }


        function getExtraChores(){
            $sql = "SELECT c.name, c.day_due, c.point_value, c.monetary_value, 
                    cu.id as cu_id, cu.date_completed  
                FROM chore as c, chore_user as cu 
                WHERE c.bonus = 1 
                AND c.id = cu.chore_id
                AND cu.user_id is NULL 
                ORDER BY FIELD(c.day_due, 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')";

            $results = db::execute($sql);

            $extraChores = [];

            while($row = $results->fetch_assoc()){

                array_push($extraChores,$row);

            }
            
            return ($extraChores);
        }

            $extraChores = "";
            $html = "";
            $addExtra = getExtraChores();

            foreach($addExtra as $chore_e){
     
                $html .= "<tr>
                    <td>{$chore_e['name']}</td>
                    <td>{$chore_e['day_due']}</td>
                    <td>{$chore_e['point_value']}</td>
                    <td>{$chore_e['monetary_value']}</td>
                    <td><button class='add' type='button' $add>Add</button>
                    <input type='hidden' name='cu_user_id' value='{$chore_e['cu_id']}'></td>
                    </tr>";
            }

            $html .= "</tbody></table></div>";
            $extraChores .= $html;
        // getExtraChores();
        // $userChores = getAllChoresForUser(3);

        // getChoresForDay($userChores, 'Tue');
        // $results = db::execute($sql);
        
        // Create welcome variable in view
        $this->view->welcome = '<img src="" alt="">
                <div class="summary">Total points earned = 350<br>Total money earned = $25.00</div>';
        
        $this->view->allChores = $allChores;
        
        $this->view->totalEarned = "<div class='total'>TOTAL POSSIBLE
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Points |</th>
                                                    <th> Money</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $mark?></td>
                                                    <td> <?php echo $mark1?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>";

        $this->view->extraChores = $extraChores;

        $this->view->addTotal = $addTotal;
        //Antime we pass variables into ANY VIEW start with $this->view->createVariable

    }


}
$pcontroller = new PersonController();

// Extract Main Controller Vars
extract($pcontroller->view->vars);


// include('personView.php');
?>
<!-- this is the content that you change for each page. Save as new page, add new content -->
    <header class="title">
        <h1>Emily
            <?php echo $welcome; ?>
        </h1>
    </header>

    <div class='personViewChores'>

        <?php echo $allChores; 

            echo $totalEarned;?>
        
    </div>
    <div class="extraChores">
        <table>
            <thead>    
                <tr>
                    <th>Chore</th>
                    <th>Due by</th>
                    <th>Points</th>
                    <th>Money</th>
                    <th>Add</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $extraChores; ?>
            </tbody>
    </div>