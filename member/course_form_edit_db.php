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
	$c_id = $_POST["c_id"];
	// $ref_m_id = $_POST['ref_m_id'];

 //    $date1 = date("Ymd_His");
	// $numrand = (mt_rand());
	// $c_img = (isset($_POST['c_img']) ? $_POST['c_img'] : '');
	// $upload=$_FILES['c_img']['name'];
	// if($upload !='') { 
	// 	//โฟลเดอร์ที่เก็บไฟล์
	// 	$path="../pimg/";
	// 	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	// 	$type = strrchr($_FILES['c_img']['name'],".");
	// 	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	// 	$newname =$numrand.$date1.$type;
	// 	$path_copy=$path.$newname;
	// 	$path_link="../pimg/".$newname;
	// 	//คัดลอกไฟล์ไปยังโฟลเดอร์
	// 	move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);  
	// }
	
	
	//edit course
	$sql = "UPDATE course SET 
	
	ref_t_id='$ref_t_id',
	c_name='$c_name',
	c_detail='$c_detail',
	c_price='$c_price'
	WHERE c_id=$c_id
	"
	;

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
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'course.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "alert('Error!!');";
	echo "window.location = 'course.php'; ";
	echo "</script>";
}
?>




