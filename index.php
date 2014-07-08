<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller
class Controller extends AppController {
	public function __construct() {
		parent::__construct();

        function getAllChores(){
            $sql = "SELECT * FROM chore
                    WHERE family_id = 1
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
<?php echo $primary_header ?>
<!-- this is the content that you change for each page. Save as new page, add new content -->
  <aside class="myFamily">
            <div id="parent1" >
                <img class="homeImg" src="images/dustin.jpg" alt="">
                  <div class="personInfo"> DUSTIN <br>
                    <form action="parentController1.php" method="GET">
                        <button type="submit" class="details">View Details</button>
                        <input type="hidden" name="user_id" value="1">
                    </form>
                  </div>
                <a href="">150 points</a>
                <a href="">$15.00</a>
            </div>
            <div id="parent2" class="person">
                <img class="homeImg" src="images/kris.jpg" alt="">
                <div class="personInfo"> KRIS <br>
                    <form action="parentController2.php" method="GET">
                        <button type="submit" class="details">View Details</button>
                        <input type="hidden" name="user_id" value="2">
                    </form>
                </div>
                <a href="">250 points</a>
                <a href="">$1.00</a>
            </div>
            <div id="child1" class="person child">
                <img class="homeImg" src="images/Emily.jpg" alt="">
                <div class="personInfo"> EMILY <br>
                    <form action="personController.php" method="GET">
                        <button type="submit" class="details">View Details</button>
                        <input type="hidden" name="user_id" value="3">
                    </form>
                </div>
                <a href="">350 points</a>
                <a href="">$25.00</a>
            </div>
            <div id="child2" class="person">
                <img class="homeImg" src="images/Abby2.jpg" alt="">
                <div class="personInfo"> ABIGAIL <br>
                    <form action="personController4.php" method="GET">
                        <button type="submit" class="details">View Details</button>
                        <input type="hidden" name="user_id" value="4">
                    </form>
                </div>
                <a href="">200 points</a>
                <a href="">$10.00</a>
            </div>    
        </aside>
        <div class="chores">
            <h3>Family Chores</h3>
            <table>
                <thead>  
                    <th>Chore</th>
                    <th>Due by</th>
                    <th>Points</th>
                    <th>Money</th>
                </thead>
                <tbody>
                    <?php echo $allChores; ?>
                </tbody>
            </table>