<?php

include('../condb.php');

//query ข้อมูลจากตาราง member: 
$query = "
SELECT l.*,m.m_fname,m.m_lname
FROM login_log as l
INNER JOIN member as m ON l.ref_m_id=m.m_id
ORDER BY l.log_id asc" or die("Error:" . mysqli_error());

// echo $query;
// exit; 

//เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
echo '<h4>ประวัติการเข้าใช้งาน</h4>';  
$result = mysqli_query($condb, $query); 

//แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<table id='example' class='display table table-bordered table-hover' cellspacing='0'>";


//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='warning'>
<th width='5%'><center>ลำดับ</center></th>
<th width='75%'><center>ชื่อสมาชิก</center></th>
<th width='20%'><center>วันเวลา</center></th>
</tr>
</thead>
";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["log_id"] .'.'. "</td> "; 
  echo "<td align='center'>" .$row["m_fname"] 
              .' '
              .$row["m_lname"];  "</td> ";
  echo "<td align='center'>" .date('d/m/Y H:i:s' ,strtotime($row["log_date"])) .  "</td> "; 
  
}
echo "</table>";
//close connection
mysqli_close($condb);
?>