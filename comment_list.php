<?php

//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM comment  
WHERE ref_c_id=$c_id 
AND cm_status=1
ORDER BY cm_date DESC" or die("Error:" . mysqli_error());

// echo $query;
// exit; 

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($condb, $query); 

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<table id='example' class='display table table-bordered table-hover' cellspacing='0'>";

//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='60%'>ความคิดเห็น</th>
<th width='40%'>วันเวลา</th>
</tr>
</thead>
";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  // echo "<td align='center'>" .$row["cm_id"] .'.'. "</td> "; 
  echo "<td>" .$row["cm_detail"] .  "</td> "; 
  echo "<td>" .date('d/m/Y H:i:s',strtotime($row["cm_date"])) .  "</td> "; 
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>