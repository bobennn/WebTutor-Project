<h4> กรุณาเลือกวันที่เริ่มต้นและวันที่สิ้นสุดในการเรียกดูรายงาน </h4>
<form action="" method="get" name="q" class="form-horizontal">
	<div class="form-group">
		<div class="col-sm-1 control-label">
			เริ่มต้น
		</div>
		<div class="col-sm-3">
			<input type="date" name="ds" class="form-control" required>
		</div>
		<div class="col-sm-1 control-label">
			สิ้นสุด
		</div>
		<div class="col-sm-3">
			<input type="date" name="de" class="form-control" required>
		</div>
		<div class="col-sm-1">
			<button type="submit" class="btn btn-info" name="act" value="bydate">ค้นหา</button>
		</div>

	</div>

</form>


<?php
$ds = $_GET['ds'];
$de = $_GET['de'];


if($ds==''){

}else{

//2. query ข้อมูลจากตาราง tb_member: 
$query = "
SELECT l.ref_m_id, m.m_fname, m.m_lname, l.log_date 
FROM login_log as l
INNER JOIN member as m ON l.ref_m_id=m.m_id
WHERE l.log_date 
BETWEEN '$ds 00:00:00.000000' 
AND '$de 23:59:59.000000'  
ORDER BY l.log_id ASC
" or die("Error:" . mysqli_error());

// echo $query;
// exit; 

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($condb, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
echo '<h4>ประวัติการเข้าใช้งาน (รายวัน)</h4>';
echo "<table id='example1' class='display table table-bordered table-hover' cellspacing='0'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='10%'><center>ลำดับ</center></th>
<th width='10%'><center>รหัสสมาชิก</center></th>
<th width='60%'><center>ชื่อสมาชิก</center></th>
<th width='30%'><center>วันเวลา</center></th>
</tr>
</thead>
";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$i += 1 .  "</td> ";
   echo "<td align='center'>" .$row["ref_m_id"].  "</td> ";
   echo "<td align='center'>" .$row["m_fname"] 
              .' '
              .$row["m_lname"];  "</td> ";
  echo "<td align='center'>" .$row["log_date"] .  "</td> "; 
  echo "</tr>";
}
echo "</table>";
}

//5. close connection
mysqli_close($condb);
?>