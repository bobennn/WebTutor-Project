<?php

//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM course_type ORDER BY t_id asc" or die("Error:" . mysqli_error());

// echo $query;
// exit; 

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($condb, $query); 

//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<table id='example' class='display table table-bordered table-hover' cellspacing='0'>";

//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='success'>
<th width='10%'><center>รหัส</center></th>
<th width='75%'><center>ประเภทรายวิชา</center></th>
<th width='10%'><center>แก้ไข</center></th>

</tr>
</thead>
";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["t_id"] .'.'. "</td> "; 
  echo "<td align='center'>" .$row["t_name"] .  "</td> "; 
  
  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='coursetype.php?ID=$row[0]&act=edit' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
  
  //ลบข้อมูล
  // echo "<td>
  // <a href='coursetype_del_db.php?ID=$row[0]' onclick=\"return confirm('ยืนยันการลบ?')\" class='btn btn-danger btn-xs'>-ลบ</a></td> ";

  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>