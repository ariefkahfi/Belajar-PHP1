<?php

include "../back-end/selectAllByFetchArray.php";

$data = $arr;


echo "<table border='2'>
    <tr>
        <td>Id</td>
        <td>Nama</td>
    </tr>
";


for($i=0; $i<count($data); $i++){
   // echo $data[$i]['id'] . " " . $data[$i]['nama'] . "<br/>";
   echo "<tr>";
   echo "<td> " . $data[$i]['id'] . "</td>";
   echo "<td>" . $data[$i]['nama']. "</td>";
   echo "</tr>";
}


echo "</table>";


