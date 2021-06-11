<?php

include('../condb.php');

//2. query ข้อมูลจากตาราง tb_member: 
$query = "
SELECT l.ref_m_id,m.m_fname,m.m_lname, COUNT(l.ref_m_id) as total
FROM login_log as l
INNER JOIN member as m ON l.ref_m_id=m.m_id
GROUP BY l.ref_m_id
" or die("Error:" . mysqli_error());

// echo $query;
// exit; 

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($condb, $query); 

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo '<h4>ประวัติการเข้าใช้งาน (รายบุคคล)</h4>'; 
echo "<table id='example1' class='display table table-bordered table-hover' cellspacing='0'>";

//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'><center>ลำดับ</center></th>
<th width='10%'><center>รหัสสมาชิก</center></th>
<th width='65%'><center>ชื่อสมาชิก</center></th>
<th width='25%'><center>จำนวนการเข้าใช้ (ครั้ง)</center></th>
</tr>
</thead>
";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$i += 1 .'.'. "</td> ";
  echo "<td align='center'>" .$row["ref_m_id"].  "</td> "; 
  echo "<td align='center'>" .$row["m_fname"] 
              .' '
              .$row["m_lname"];  "</td> "; 
  echo "<td align='center'>" .$row["total"] .  "</td> "; 
  
  
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>