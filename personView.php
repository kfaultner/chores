<!-- <header class="title">
            <h1>Emily
                <?php ; ?> echo $welcome inside php tag
            </h1>
        </header>
        <div class="personViewChores">
            <script id="searchResults" type="text/x-handlebars-template">

                <tr>
                    <td>{{name}}</td>
                    <td>{{day_due}}</td>
                    <td>{{point_value}}</td>
                    <td>{{monetary_value}}</td>
                </tr>
            </script>
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
                        <td>{{name}}</td>
                        <td>{{day_due}}</td>
                        <td>{{point_value}}</td>
                        <td>{{monetary_value}}</td> 
                        <td><input class="done" type="checkbox"></td>
                    </tbody>
                </table>
            </div>
            <div class="day">TUESDAY
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
                        <td>{{name}}</td>
                        <td>{{day_due}}</td>
                        <td>{{point_value}}</td>
                        <td>{{monetary_value}}</td> 
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
        </div> -->