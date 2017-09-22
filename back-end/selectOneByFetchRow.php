<?php
include 'koneksi.php';


$arr = array();

//$id = $_GET['id'];

$query_fetchRow = mysqli_query($con,"select * from person");


while ($rs = mysqli_fetch_row($query_fetchRow)){
    array_push($arr,$rs);
}

echo "<br/>";

   for($i = 0; $i<count($arr); $i++){
       echo $arr[$i][0] . " " . $arr[$i][1] .  "<br/>" ;
   }

//echo json_encode($arr);
