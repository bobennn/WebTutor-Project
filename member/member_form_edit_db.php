<meta charset="utf-8">
<?php

//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();


	$m_fname = $_POST["m_fname"];
	$m_lname = $_POST["m_lname"];
	$m_gender = $_POST["m_gender"];
	$m_email = $_POST["m_email"];
	$m_phone = $_POST["m_phone"];
	$m_line = $_POST["m_line"];
	$m_img2 = $_POST["m_img2"];
	$m_id = $_POST["m_id"];
	$m_graduate = $_POST["m_graduate"];
	$m_faculy = $_POST["m_faculy"];
	$m_experience = $_POST["m_experience"];


	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img = (isset($_POST['m_img']) ? $_POST['m_img'] : '');
	$upload=$_FILES['m_img']['name'];
	
	if($upload !='') { 
		
		//โฟลเดอร์ที่เก็บไฟล์
		$path="../mimg/";
		
		//ตัวขื่อกับนามสกุลภาพออกจากกัน
		$type = strrchr($_FILES['m_img']['name'],".");
		
		//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../mimg/".$newname;
		
		//คัดลอกไฟล์ไปยังโฟลเดอร์
		move_uploaded_file($_FILES['m_img']['tmp_name'],$path_copy);  
	}else{
		$newname=$m_img2;
	}

	
	//update data 
	$sql = "UPDATE member SET
	m_fname='$m_fname',
	m_lname='$m_lname',
	m_gender='$m_gender',
	m_email='$m_email',
	m_phone='$m_phone',
	m_line='$m_line',
	m_img='$newname',
	m_graduate='$m_graduate',
	m_faculy='$m_faculy',
	m_experience='$m_experience'

	WHERE m_id=$m_id
	";

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
	echo "window.location = 'index.php?act=edit'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}
?>