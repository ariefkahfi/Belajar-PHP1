<?php

include 'koneksi.php';



$arr = array();


$id = $_GET['id'];

$query_getOne = mysqli_query($con,"select * from person where id = '$id'");

$rs = mysqli_fetch_assoc($query_getOne);

array_push($arr,$rs);


echo json_encode ($arr);
