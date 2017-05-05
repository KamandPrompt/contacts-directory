<?php

    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $str = $_GET["q"];
    $regex = new MongoDB\BSON\Regex('' . $str, 'i');
    $filter = [ 'name' => $regex ];
    $query = new MongoDB\Driver\Query($filter);   
    $rows = $mng->executeQuery("directory.btech2016", $query);
    $response = "";
    $response1 = "";
    $count = 0;
    foreach ($rows as $row) {
        $count++;
        $response = $response . "<li>$row->name : $row->roll : $row->branch : $row->hostel : $row->room" . "</li><br>";
    }    
    if($count>0){
        $response = "Batch 2016: <br>" . $response;
        $count = 0;
    }
    $rows = $mng->executeQuery("directory.btech2015", $query);
    foreach ($rows as $row) {
        $count++;
        $response1 = $response1 . "<li>$row->name : $row->roll : $row->branch : $row->hostel : $row->room" . "</li><br>";
    }
    if($count>0){
        $response1 = "Batch 2015: <br>" . $response1;
        $count = 0;
    }
    //get the q parameter from URL
    
// //lookup all links from the xml file if length of q>0
// if (strlen($q)>0) {
//   $hint="";
//   for($i=0; $i<($x->length); $i++) {
//     $y=$x->item($i)->getElementsByTagName('title');
//     $z=$x->item($i)->getElementsByTagName('url');
//     if ($y->item(0)->nodeType==1) {
//       //find a link matching the search text
//       if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
//         if ($hint=="") {
//           $hint="<a href='" . 
//           $z->item(0)->childNodes->item(0)->nodeValue . 
//           "' target='_blank'>" . 
//           $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
//         } else {
//           $hint=$hint . "<br /><a href='" . 
//           $z->item(0)->childNodes->item(0)->nodeValue . 
//           "' target='_blank'>" . 
//           $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
//         }
//       }
//     }
//   }
// }''



// Set output to "no suggestion" if no hint was found
// or to the correct values
// if ($hint=="") {
//   $response="no suggestion";
// } else {
//   $response=$hint;
// }

// //output the response
echo $response . $response1;
?>