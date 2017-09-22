<?php
include '../back-end/koneksi.php';

$arr = array();

$query_each = mysqli_query($con,"select * from person");

while($rs = mysqli_fetch_array($query_each,MYSQLI_ASSOC)){
   array_push($arr,$rs);
}

foreach($arr as $a => $a_value){
    echo $a_value['id'] ." " . $a_value['nama'] .  "<br/>";
}


//echo json_encode($arr);

