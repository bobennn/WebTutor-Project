<?php

include('../condb.php');

//query ข้อมูลจากตาราง member: 
$query = "
SELECT c.*,m.m_fname, t.t_name
FROM course as  c
LEFT JOIN member as m ON c.ref_m_id=m.m_id
LEFT JOIN course_type as t ON c.ref_t_id=t.t_id
WHERE c.ref_m_id=$m_id
ORDER BY c.c_id ASC" 

or die("Error:" . mysqli_error());

// echo $query;
// exit; 

//เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($condb, $query);

//แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo "<table id='example' class='display table table-bordered table-hover' cellspacing='0'>";

//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'><center>ลำดับ</center></th>
<th width='10%'><center>ประเภทรายวิชา</center></th>
<th width='35%'><center>ชื่อคอร์ส</center></th>
<th width='5%'><center>ราคา:ชม.</center></th>
<th width='5%'><center>ยอดเข้าชม</center></th>
<th width='15%'><center>เพิ่มเมื่อ</center></th>
<th width='5%'><center>สถานะ</center></th>
<th width='10%'><center>ปรับสถานะ</center></th>
<th width='5%'><center>แก้ไข</center></th>
<th width='5%'><center>ลบ</center></th>
</tr>
</thead>
";

while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  // echo "<td align='center'>" .$row["c_id"] .'.'."</td> ";
  echo "<td align='center'>" .$i += 1 .  "</td> "; 
  
  echo "<td>" .$row["t_name"] .  "</td> "; 
  echo "<td>" .$row["c_name"] .  "</td> ";
  echo "<td align='center'>" .$row["c_price"] .  "</td> ";  
  echo "<td align='center'>" .$row["c_view"] .  "</td> ";
 
  echo "<td align='center'>" .date('d-m-Y',strtotime($row["c_datesave"])).  "</td> ";

  echo "<td align='center'>"; 
  $c_status = $row["c_status"];
  if($c_status==0){
    echo '<font color="#e62727">';
    echo 'ไม่แสดง';
  }else{
    echo '<font color="#00bf16">';
    echo 'แสดง';
  }
  echo "</td> ";


  //ปรับสถานะข้อมูล
  echo "<td align='center'>
  <a href='course_status_db.php?c_id=$row[0]&c_status=$c_status' class='btn btn-primary btn-xs'>ปรับสถานะ</a></td> ";

  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='course.php?ID=$row[0]&act=edit' class='btn btn-warning btn-xs'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='course_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";

  echo "</tr>";
}
echo "</table>";

//close connection
mysqli_close($condb);
?>