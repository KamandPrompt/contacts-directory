<DOCTYPE html>
    <head>
        <title> facstaffContacts </title>
        <link rel = "stylesheet"
   type = "text/css"
   href = "../public/css/myStyle.css" />
        
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <a id ="logo" href="insite.iitmandi.ac.in"><img src="../public/img/images.png" height="150" width="230" style="margin-left: -15px;" /></a>
            <div class="Dropdown">
                <button class="dropbtn">B.Tech Batch</button>
                <div class="Dropdown-content">
                    <a href="btech2016.php">B.Tech 2016</a>
                    <a href="btech2015.php">B.Tech 2015</a>
                    <a href="btech2014.php">B.Tech 2014</a>
                    <a href="btech2013.php">B.Tech 2013</a>
                </div>
            </div>
            <div class="Dropdown">
                <button class="dropbtn">Post Graduate</button>
                <div class="Dropdown-content">
                    <a href="ms.php">MS</a>
                    <a href="msc.php">M.Sc</a>
                    <a href="mtech.php">M.Tech</a>
                </div>
            </div>
            <div class="Dropdown">
                <button class="dropbtn">Ph.D</button>
                <div class="Dropdown-content">
                    <a href="phd.php">Ph.D</a>
                    <a href="iphd.php">Int Ph.D</a>
                </div>
            </div>
            <div class="Dropdown">
                <a id="fac" href="#"><button class="dropbtn">Faculty and Staff</a></button>
                <div class="Dropdown-content">
                    
                </div>
            </div>
        </div>
        <div id="myPage" class="page">

            <h1 id="iitmandi">Indian Institute Of Technology Mandi</h1>
            <h1 id="iit">IIT Mandi</h1>
            <h3>Contacts Directory</h3>
            <input type="text" name="search" id="staff" placeholder="Search Contact" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Contact'">
            <div style="overflow-x:auto">
            <table>
                <tr>
                    <th rowspan="2">Name</th>
                    <th rowspan="2">Designation</th>
                    <th colspan="3"  style="text-align: center;">Contact</th>
                    <th rowspan="2">Email</th>
                    <th rowspan="2">Office</th>
                    <th rowspan="2">Residence</th>
                </tr>
                <tr style="background-color: rgba(97, 104, 147, 0.7)">
                    
                    <th style="color: white;">Office</th>
                    <th style="color: white;">Home</th>
                    <th style="color: white;">Other/Fax</th>
                </tr>
               
                 <?php
                  // connect to mongodb


                try {

                    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                    $query = new MongoDB\Driver\Command(['distinct' => 'staff', 'key' => 'department']); 
                    $cursor = $mng->executeCommand("directory", $query);
                    $cursor =  current($cursor->toArray())->values;
                    foreach ($cursor as $heading){
                        echo '<tr class="details"><td colspan="8" style="padding: 0.5vw 5vw; font-weight: 800;">' . $heading. '</td></tr>';
                        $filter = [ 'department' => $heading ];
                        $query = new MongoDB\Driver\Query($filter); 
                        $rows = $mng->executeQuery("directory.staff", $query);
                        foreach ($rows as $row) {
                            echo "<tr class='details'><td>$row->name</td><td>$row->designation</td><td>$row->office</td><td>$row->home</td><td>$row->other</td><td>$row->email</td><td>$row->address</td><td>$row->residence</td>" . "</tr>";
                        }
                    }
                } catch (MongoDB\Driver\Exception\Exception $e) {

                    $filename = basename(__FILE__);
                    
                    echo "The $filename script has experienced an error.\n"; 
                    echo "It failed with the following exception:\n";
                    
                    echo "Exception:", $e->getMessage(), "\n";
                    echo "In file:", $e->getFile(), "\n";
                    echo "On line:", $e->getLine(), "\n";       
                } 
                ?>

                <!-- <tr>
                    <td>TAG</td>
                    <td>Director</td>
                    <td>??????</td>
                    <td>??????</td>
                    <td>??????</td>
                    <td>director</td>
                    <td>Directorate Office-105</td>
                    <td>C-36(S-1) NC</td>
                </tr>
                  --> 
            </table>
            </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="../public/js/search.js"></script>
    </body>
    </html>
