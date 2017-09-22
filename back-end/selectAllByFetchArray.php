<?php
include 'koneksi.php';


$arr = array();

$query_select = mysqli_query($con,"select * from person");


while($rs = mysqli_fetch_array($query_select,MYSQLI_ASSOC)){
    $arr [] = $rs;
}

