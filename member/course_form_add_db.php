<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();


	$ref_t_id = $_POST["ref_t_id"];
	$c_name = $_POST["c_name"];
	$c_detail = $_POST["c_detail"];
	$c_price = $_POST["c_price"];
	$ref_m_id = $_POST['ref_m_id'];
	
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO course
	(
	ref_t_id,
	c_name,
	c_detail,
	c_price,
	ref_m_id
	)
	VALUES
	(
	'$ref_t_id',
	'$c_name',
	'$c_detail',
	'$c_price',
	 $ref_m_id
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	// echo '<pre>';
	// echo $sql;
	// echo '</pre>';
	// exit;
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($condb);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'course.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'course.php'; ";
	echo "</script>";
}
?>




