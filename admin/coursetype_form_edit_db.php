<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();

	$t_name = $_POST["t_name"];
	$t_id = $_POST["t_id"];


	//แก้ไขข้อมูล
	$sql = "UPDATE course_type SET
	t_name='$t_name'
	WHERE t_id=$t_id " ;
	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	// echo $sql;
	// exit;
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);

	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'coursetype.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'courusetype.php'; ";
	echo "</script>";
}
?>