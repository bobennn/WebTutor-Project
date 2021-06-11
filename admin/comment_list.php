<?php

//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM comment ORDER BY cm_id DESC" or die("Error:" . mysqli_error());

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
<th width='5%'><center>รหัส</center></th>
<th width='45%'><center>ความคิดเห็น</center></th>
<th width='10%'><center>สถานะ</center></th>
<th width='12%'><center>วันที่เพิ่ม</center></th>
<th width='18%'><center>รายละเอียดคอร์ส</center></th>
<th width='10%'><center>แก้ไข</center></th>
</tr>
</thead>
";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["cm_id"] .'.'. "</td> "; 
  
  echo "<td align='center'>" ;
  echo $row["cm_detail"];
  // echo ' ';
  // echo "<a href='course.php?ID=$row[ref_c_id]&act=edit' class='btn btn-success btn-xs' target='_blank'>เปิด</a>";
  echo "</td> ";
  
  echo "<td align='center'>"; 
  $cm_status = $row["cm_status"];
  if($cm_status==0){
    echo '<font color="#e62727">';
    echo 'รออนุมัติ';
  }else{
    echo '<font color="#00bf16">';
    echo 'อนุมัติ';
  }
  echo "</td> ";

  echo "<td align='center'>" .date('d/m/Y',strtotime($row["cm_date"])) . "</td> ";
  
  //เปิดดูข้อมูล
  echo "<td align='center'>
  <a href='course.php?ID=$row[ref_c_id]&act=edit' class='btn btn-success btn-xs' target='_blank'>เปิด</a></td>";
  
  //ปรับสถานะข้อมูล
  echo "<td align='center'>
  <a href='comment_status_db.php?cm_id=$row[0]&cm_status=$cm_status' class='btn btn-primary btn-xs'>ปรับสถานะ</a></td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>