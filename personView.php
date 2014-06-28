<?php

// Init
include($_SERVER['DOCUMENT_ROOT'] . '/chores/app/core/initialize.php');

// Controller
class Controller extends AppController {
    public function __construct() {
        parent::__construct();

        // Create welcome variable in view
        $this->view->welcome = '<img src="" alt="">
                <div class="summary">Total points earned = 350<br>Total money earned = $25.00</div>';

        //Antime we pass variables into ANY VIEW start with $this->view->createVariable
    }

}
$controller = new Controller();

// Extract Main Controler Vars
extract($controller->view->vars);

?>

<!-- this is the content that you change for each page. Save as new page, add new content -->
 <header class="title">
            <h1>Emily
                <?php echo $welcome ?>;
            </h1>
        </header>
        <div class="personViewChores">
            <div class="day">MONDAY
                <table>
                    <thead>    
                        <tr>
                            <th>Chore</th>
                            <th>Due by</th>
                            <th>Points</th>
                            <th>Money</th>
                            <th>Done</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Pick up toys/books</td>
                        <td>Every Day</td>
                        <td>10</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    <tbody>
                        <td>Make bed</td>
                        <td>Every Day</td>
                        <td>5</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                </table>
            </div>
            <div class="day">TUESDAY
                <table>
                    <thead>
                    <tbody>    
                        <tr>
                            <th>Chore</th>
                            <th>Due by</th>
                            <th>Points</th>
                            <th>Money</th>
                            <th>Done</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <td>Make bed</td>
                        <td>Every Day</td>
                        <td>5</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    </thead>
                    <tbody>
                        <td>Pick up toys/books</td>
                        <td>Every Day</td>
                        <td>10</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    <tbody>
                        <td>Make bed</td>
                        <td>Every Day</td>
                        <td>5</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                </table>
            </div>
            <div class="day">WEDNESDAY
                <table>
                    <thead>    
                        <tr>
                            <th>Chore</th>
                            <th>Due by</th>
                            <th>Points</th>
                            <th>Money</th>
                            <th>Done</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Pick up toys/books</td>
                        <td>Every Day</td>
                        <td>10</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    <tbody>
                        <td>Make bed</td>
                        <td>Every Day</td>
                        <td>5</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    <tbody>
                        <td>Vacuum</td>
                        <td>Wednesday</td>
                        <td></td>
                        <td>$5.00</td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                </table>
            </div>
            <div class="day">THURSDAY
                <table>
                    <thead>    
                        <tr>
                            <th>Chore</th>
                            <th>Due by</th>
                            <th>Points</th>
                            <th>Money</th>
                            <th>Done</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Pick up toys/books</td>
                        <td>Every Day</td>
                        <td>10</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    <tbody>
                        <td>Make bed</td>
                        <td>Every Day</td>
                        <td>5</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                </table>
            </div>
            <div class="day">FRIDAY
                <table>
                    <thead>    
                        <tr>
                            <th>Chore</th>
                            <th>Due by</th>
                            <th>Points</th>
                            <th>Money</th>
                            <th>Done</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Pick up toys/books</td>
                        <td>Every Day</td>
                        <td>10</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    <tbody>
                        <td>Make bed</td>
                        <td>Every Day</td>
                        <td>5</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                </table>
            </div>
            <div class="day">SATURDAY
                <table>
                    <thead>    
                        <tr>
                            <th>Chore</th>
                            <th>Due by</th>
                            <th>Points</th>
                            <th>Money</th>
                            <th>Done</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Pick up toys/books</td>
                        <td>Every Day</td>
                        <td>10</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    <tbody>
                        <td>Make bed</td>
                        <td>Every Day</td>
                        <td>5</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                </table>
            </div>
            <div class="day">SUNDAY
                <table>
                    <thead>    
                        <tr>
                            <th>Chore</th>
                            <th>Due by</th>
                            <th>Points</th>
                            <th>Money</th>
                            <th>Done</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Pick up toys/books</td>
                        <td>Every Day</td>
                        <td>10</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                    <tbody>
                        <td>Make bed</td>
                        <td>Every Day</td>
                        <td>5</td>
                        <td></td>
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                </table>
            </div>
             <div class="total">TOTAL POSSIBLE
                <table>
                    <thead>    
                        <tr>
                            <th>Points</th>
                            <th>Money</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="myChores">
            <h2>Chores</h2>
             <table>
                <thead>    
                    <tr>
                        <th>Chore</th>
                        <th>Due by</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Clean room</td>
                        <td>Every day</td>
                        <td>15 points</td>
                        <td><button> Add </button></td>
                    </tr>
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
        </div>