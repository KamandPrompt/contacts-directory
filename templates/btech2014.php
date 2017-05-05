<DOCTYPE html>
<html>
    <head>
        <title> Contacts - BTech 2014</title>
        <style>
        /* The side navigation menu */
        
        .sidenav {
            height: 100%;
            /* 100% Full-height */
            width: 20%;
            /* 0 width - change this with JavaScript */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Stay on top */
            top: 0;
            left: 0;
            background-color: #D3D3D3;
            /* Black*/
            overflow-x: hidden;
            /* Disable horizontal scroll */
            padding-top: 5px;
            /* Place content 60px from the top */
            /*transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
        }
        /* The navigation menu links */
        
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            /*transition: 0.3s*/
        }
        /* When you mouse over the navigation links, change their color */
        
        .sidenav a:hover,
        .offcanvas a:focus {
            color: #818181;
        }
        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        
        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }
            .sidenav a {
                font-size: 18px;
            }
        }
        /* Dropdown Button */
        
        .dropbtn {
            width: 300%;
            background-color: #d3d3d3;
            color: #000;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-bottom: #030303 1px solid;
            cursor: pointer;
            text-align: left;
        }
        /* The container <div> - needed to position the dropdown content */
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        /* Dropdown Content (Hidden by Default) */
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #818181;
            min-width: 20%;
            box-shadow: 0px 8px 16px 0px rgba(17, 17, 17, 0.2);
            ;
            z-index: 1;
        }
        /* Links inside the dropdown */
        
        .dropdown-content a {
            color: white;
            padding: 10px 10px;
            text-decoration: none;
            display: block;
            font-size: 18px;
        }
        /* Change color of dropdown links on hover */
        
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }
        /* Show the dropdown menu on hover */
        
        .dropdown:hover .dropdown-content {
            display: block;
            width: 300%;
            text-align: left;
        }
        /* Change the background color of the dropdown button when the dropdown content is shown */
        
        .dropdown:hover .dropbtn {
            background-color: #818181;
        }
        
        .page {
            height: 100%;
            /* 100% Full-height */
            width: 80%;
            /* 0 width - change this with JavaScript */
            margin-left: 20%;
            z-index: 1;
            /* Stay on top */
            top: 0;
            left: 0;
            background-color: #fff;
            /* Black*/
            overflow-x: hidden;
            /* Disable horizontal scroll */
            padding-top: 0px;
            /* Place content 60px from the top */
            /*transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
        }
        
        .page h1 {
            text-align: center;
            font-size: 40px;
            color: #333;
            padding-top: 20px;
        }
        
        .page h3 {
            text-align: center;
            font-size: 30px;
            color: #333;
            position: relative;
            -webkit-animation: mymove 3s;
            /* Safari 4.0 - 8.0 */
            -webkit-animation-fill-mode: forwards;
            /* Safari 4.0 - 8.0 */
            animation: mymove 3s;
            animation-fill-mode: forwards;
        }
        /* Safari 4.0 - 8.0 */
        
        @-webkit-keyframes mymove {
            from {
                top: -20px;
            }
            to {
                top: 100px;
            }
        }
        
        @keyframes mymove {
            from {
                top: -20px;
            }
            to {
                top: 20px;
            }
        }
        
        input[type=text] {
            width: 250px;
            margin-left: 39%;
            padding-bottom: 100px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 2px;
            font-size: 20px;
            background-color: #f3f3f3;
            color: black;
            background-image: url('../public/img/searchicon1.png');
            background-size: 45px 45px;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding: 20px 20px 20px 60px;
            transition-property: margin-left, width;
            transition-duration: 0.2s;
            transition-timing-function: linear;
        }
        
        input[type=text]:focus {
            margin-left: 20%;
            width: 60%;
        }
        
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 40px;
        }
        
        th,
        td {
            text-align: left;
            padding: 20px;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2
        }
        
        th {
            background-color: #111;
            color: white;
        }
        </style>
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <a href="index.html"><img src="../public/img/images.png" height="150" width="230" style="margin-left: -15px;" /></a>
            <div class="Dropdown">
                <button class="dropbtn">B.Tech Batch</button>
                <div class="Dropdown-content">
                    <a href="btech2016.php">B.Tech 2016</a>
                    <a href="btech2015.php">B.Tech 2015</a>
                    <a href="#">B.Tech 2014</a>
                    <a href="btech2013.php">B.Tech 2013</a>
                </div>
            </div>
            <div class="Dropdown">
                <button class="dropbtn">Post Graduate</button>
                <div class="Dropdown-content">
                    <a href="ms.php">MS</a>
                    <a href="msc.php">M.Sc</a>
                    <a href="#mtech.php">M.Tech</a>
                </div>
            </div>
            <div class="Dropdown">
                <button class="dropbtn">Ph.D</button>
                <div class="Dropdown-content">
                    <a href="phd.php">Ph.D</a>
                    <a href="iphd.php">Int Ph.D</a>
                </div>
            </div>
        </div>
        <div id="myPage" class="page">
            <h1>Indian Institute Of Technology Mandi</h1>
            <h3>Contacts Directory - BTech 2014</h3>
            <input type="text" name="search" id="searchb2014" placeholder="Search by Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search by Name'">
            <table>
                <tr>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Branch</th>
                    <th>Hostel</th>
                    <th>Room No.</th>
                    <th>Personal Contact</th>
                    <th>Emergency Contact</th>
                </tr>
                <?php
                  // connect to mongodb


                try {

                    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                    $options = [
                        'sort' => ['roll' => 1],
                    ];
                    $query = new MongoDB\Driver\Query([],$options); 
                    $rows = $mng->executeQuery("directory.btech2014", $query);
                    foreach ($rows as $row) {
                    
                        echo "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
                    }
                    
                } catch (MongoDB\Driver\Exception\Exception $e) {

                    $filename = basename(__FILE__);
                    
                    echo "The $filename script has experienced an error.\n"; 
                    echo "It failed with the following exception:\n";
                    
                    echo "Exception:", $e->getMessage(), "\n";
                    echo "In file:", $e->getFile(), "\n";
                    echo "On line:", $e->getLine(), "\n";       
                } 
                ?><!-- 
                <tr>
                    <td>B16038</td>
                    <td>Sylvia</td>
                    <td>Computer Sceince and Engineering</td>
                    <td>B4 Chandertaal</td>
                    <td>001</td>
                    <td>7807105329</td>
                    <td>Mr. Rajiv Mittal</td>
                    <td>9416220759</td>
                </tr> -->
            </table>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="../public/js/search.js"></script>
    </body>
</html>