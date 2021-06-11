<meta charset="utf-8">
<?php

//condb
include('condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();

//รับค่าจากฟอร์ม
	$cm_detail = $_POST["cm_detail"];
	$ref_c_id = $_POST["ref_c_id"];

	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO comment
	(cm_detail,ref_c_id)
	VALUES
	('$cm_detail',$ref_c_id)";
	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	// echo $sql;
	// exit;
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);

	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	if($result){
	echo "<script type='text/javascript'>";
	// echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'detail.php?c_id=$ref_c_id'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'detail.php?c_id=$ref_c_id'; ";
	echo "</script>";
}
?>