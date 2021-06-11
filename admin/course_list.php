<?php

include('../condb.php');

//2. query ข้อมูลจากตาราง tb_member: 
$query = "
SELECT c.*,m.m_fname,m.m_lname, t.t_name
FROM course as  c
LEFT JOIN member as m ON c.ref_m_id=m.m_id
LEFT JOIN course_type as t ON c.ref_t_id=t.t_id
ORDER BY c.c_id ASC" 
or die("Error:" . mysqli_error());

// echo $query;
// exit; 

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($condb, $query);

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<table id='example' class='display table table-bordered table-hover' cellspacing='0'>";

//หัวข้อตาราง
echo "

<thead>
<tr align='center' class='info'>
<th width='5%'><center>รหัส</center></th>
<th width='10%'><center>ประเภทรายวิชา</center></th>
<th width='40%'><center>ชื่อคอร์ส</center></th>
<th width='5%'><center>ราคา:ชม.</center></th>
<th width='5%'><center>ยอดเข้าชม</center></th>
<th width='15%'><center>เพิ่มโดย</center></th>
<th width='15%'><center>เพิ่มเมื่อ</center></th>
<th width='5%'><center>ข้อมูลเพิ่มเติม</center></th>
<th width='5%'><center>ลบ</center></th>
</tr>
</thead>
";

while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["c_id"] .'.'."</td> "; 
  echo "<td>" .$row["t_name"] .  "</td> "; 
  echo "<td>" .$row["c_name"] .  "</td> ";
  echo "<td align='center'>" .$row["c_price"] .  "</td> ";  
  echo "<td align='center'>" .$row["c_view"] .  "</td> ";
 echo "<td align='center'>"
      .$row["m_fname"]
      .' '
      .$row["m_lname"];
      
      echo "</td>";
  
  echo "<td align='center'>" .date('d-m-Y',strtotime($row["c_datesave"])).  "</td> ";

  //ดูข้อมูล
  echo "<td align='center'>
  <a href='course.php?ID=$row[0]&act=edit' class='btn btn-success btn-xs'>เปิด</a></td> ";
  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='course_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";

  echo "</tr>";
}
echo "</table>";

//5. close connection
mysqli_close($condb);
?>