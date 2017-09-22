<?php
include 'koneksi.php';

$nama = $_POST['nama'];


$query_insert = mysqli_query($con,
    "insert into person (nama) values ('$nama')");

if($query_insert){
  echo "Data berhasil di simpan ke dalam database";
}else{
  echo mysqli_error($con);
}

