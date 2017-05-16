<?php

    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $str = $_GET["q"];
    if($_GET["b"]=="btech2016"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
            $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.btech2016", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
    }
    else if($_GET["b"]=="btech2015"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
            $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.btech2015", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
    }
    else if($_GET["b"]=="btech2014"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
            $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.btech2014", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
    }
    else if($_GET["b"]=="btech2013"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
              $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.btech2013", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
    }
    else if($_GET["b"]=="phd"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
            $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.phd", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
    }
    else if($_GET["b"]=="ms"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
            $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.ms", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
    }
    else if($_GET["b"]=="msc"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
            $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.msc", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
    }
    else if($_GET["b"]=="mtech"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
            $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.mtech", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
    }
    else if($_GET["b"]=="staff"){
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.staff", $query);
        $response = "";
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->name</td><td>$row->designation</td><td>$row->office</td><td>$row->home</td><td>$row->other</td><td>$row->email</td><td>$row->address</td><td>$row->residence</td>" . "</tr>";
        }
    }

    else{
        $regex = new MongoDB\BSON\Regex('' . $str, 'i');
        if(preg_match("/^[a-zA-Z]{1}[0-9]+$/", $str))
            $filter = [ 'roll' => $regex ];
        else
            $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $response = "";
        $batch = 2013;
        $i = 0;
        while($i<4){
            $search = "directory.btech" . $batch;
            $rows = $mng->executeQuery($search, $query);
            foreach ($rows as $row) {
                $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
            }
            $i++;
            $batch++;
        }
        $rows = $mng->executeQuery("directory.mtech", $query);
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
        $rows = $mng->executeQuery("directory.msc", $query);
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
        $rows = $mng->executeQuery("directory.ms", $query);
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
        $rows = $mng->executeQuery("directory.phd", $query);
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }
        $rows = $mng->executeQuery("directory.iphd", $query);
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->roll</td><td>$row->name</td><td>$row->branch</td><td>$row->hostel</td><td>$row->room</td><td>$row->number</td><td>$row->emergency</td>" . "</tr>";
        }

        $response = $response . " | ";
        $filter = [ 'name' => $regex ];
        $query = new MongoDB\Driver\Query($filter);   
        $rows = $mng->executeQuery("directory.staff", $query);
        foreach ($rows as $row) {
            $response = $response . "<tr class='details'><td>$row->name</td><td>$row->designation</td><td>$row->office</td><td>$row->home</td><td>$row->other</td><td>$row->email</td><td>$row->address</td><td>$row->residence</td>" . "</tr>";
        }
    }
echo $response;
?>