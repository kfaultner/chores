<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller
class Controller extends AppController {
	public function __construct() {
		parent::__construct();

		// Create welcome variable in view
		$this->view->welcome = 'FAULTNER FAMILY CHORES';

        //Antime we pass variables into ANY VIEW start with $this->view->createVariable
	}

}
$controller = new Controller();

// Extract Main Controler Vars
extract($controller->view->vars);

?>

<!-- this is the content that you change for each page. Save as new page, add new content -->
  <aside class="myFamily">
            <div class="parent1">
                <img src="" alt="">
                <a href="">Dustin</a><br>
                <a href="">150 points</a>
                <a href="">$15.00</a>
            </div>
            <div class="parent2">
                <img src="" alt="">
                <a href="">Kris</a><br>
                <a href="">250 points</a>
                <a href="">$1.00</a>
            </div>
            <div class="child1">
                <img src="" alt="">
                <a href="">Emily</a><br>
                <a href="">350 points</a>
                <a href="">$25.00</a>
            </div>
            <div class="child2">
                <img src="" alt="">
                <a href="">Abby</a><br>
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
                    <th>Value</th>
                </thead>
                <tbody>
                        <td>Clean room</td>
                        <td>Every day</td>
                        <td>15 points</td>
                        <td><button> Add </button></td>
                    <tr>
                        <td>Dishes</td>
                        <td>Every day</td>
                        <td>25 points</td>
                        <td><button> Add </button></td>
                    </tr>
                    <tr>
                        <td>Mop floors</td>
                        <td>Sat</td>
                        <td>$2.00</td>
                        <td><button> Add </button></td>
                    </tr>
                    <tr>
                        <td>Dust Living Room</td>
                        <td>Thursday</td>
                        <td>$1.50</td>
                        <td><button> Add </button></td>
                    </tr>
                    <tr>
                        <td>Clean bathroom</td>
                        <td>Sat</td>
                        <td>$4.00</td>
                        <td><button> Add </button></td>
                    </tr>
                </tbody>
            </table>