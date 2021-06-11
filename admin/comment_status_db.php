<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

// exit();

	$cm_id = $_GET["cm_id"];
	$cm_status = $_GET["cm_status"];

	if ($cm_status==0) {
			// echo 'ปรับให้เป็นอนุมัติ';
		$sql = "UPDATE comment SET
		cm_status=1
		WHERE cm_id=$cm_id " ;
	} else {
		// echo 'ปรับให้เป็นรออนุมัติ';
		$sql = "UPDATE comment SET
		cm_status=0
		WHERE cm_id=$cm_id " ;
		}
	

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	// echo $sql;
	// exit;
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);

	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	if($result){
	echo "<script type='text/javascript'>";
	//echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'comment.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'comment.php'; ";
	echo "</script>";
}
?>