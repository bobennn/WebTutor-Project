<?php

$query = "
SELECT * 
FROM member
WHERE m_img_edu
ORDER BY m_id ASC" 
or die("Error:" . mysqli_error());

// echo $query;
// exit; 

$result = mysqli_query($condb, $query); 


echo "<table id='example' class='display table table-bordered table-hover' cellspacing='0'>";

//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'><center>รหัสสมาชิก</center></th>
<th width='15%'><center>ชื่อ-นามสกุล</center></th>
<th width='30%'><center>กำลังศึกษา/จบการศึกษาจาก</center></th>
<th width='30%'><center>รูปสำเนารับรองการศึกษา</center></th>
<th width='10%'><center>วันที่แจ้ง</center></th>
<th width='5%'><center>สถานะ</center></th>
<th width='5%'><center>แก้ไข</center></th>
</tr>
</thead>
";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  
  echo "<td align='center'>" .$row["m_id"] .'.'  ."</td> ";
  echo "<td align='center'>"
      .$row["m_fname"]
      .' '
      .$row["m_lname"];
      
      echo "</td>";

  echo "<td >".$row["m_graduate"];

  if($row["m_graduate"]!=''){

        echo '<br/>';
        echo 'คณะ '.$row["m_faculy"];
  }
  
  echo "</td> "; 

  echo "<td align='center'>"."<img src='../edu_img/".$row['m_img_edu']."'width=200 height=300'>"."</td>";

  
  echo "<td align='center'>" .date('d/m/Y',strtotime($row["m_confirm_date"])) .  "</td> ";
  
  echo "<td align='center'>"; 
  $m_status = $row["m_status"];
  if($m_status==0){
    echo '<font color="#e62727">';
    echo 'รออนุมัติ';
  }else{
    echo '<font color="#00bf16">';
    echo 'อนุมัติ';
  }
  echo "</td> ";

  
  //ปรับสถานะข้อมูล
  echo "<td align='center'>
  <a href='confirm_status_db.php?m_id=$row[0]&m_status=$m_status' class='btn btn-primary btn-xs'>ปรับสถานะ</a></td> ";
  echo "</tr>";
}
echo "</table>";

mysqli_close($condb);
?>