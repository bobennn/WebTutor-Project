<meta charset="utf-8">
<?php

//condb
include('../condb.php'); 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();

	$m_id = $_POST["m_id"];
	$m_img2 = $_POST["m_img2"];
	$m_graduate = $_POST["m_graduate"];
	$m_faculy = $_POST["m_faculy"];
	$m_confirm_date = $_POST["m_confirm_date"];


	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	$m_img_edu = (isset($_POST['m_img_edu']) ? $_POST['m_img_edu'] : '');
	$upload=$_FILES['m_img_edu']['name'];
	
	if($upload !='') { 
		
		//โฟลเดอร์ที่เก็บไฟล์
		$path="../edu_img/";
		
		//ตัวขื่อกับนามสกุลภาพออกจากกัน
		$type = strrchr($_FILES['m_img_edu']['name'],".");
		
		//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
		$newname =$numrand.$date1.$type;
		$path_copy=$path.$newname;
		$path_link="../edu_img/".$newname;
		
		//คัดลอกไฟล์ไปยังโฟลเดอร์
		move_uploaded_file($_FILES['m_img_edu']['tmp_name'],$path_copy);  
	}else{
		$newname=$m_img_edu2;
	}

	
	//เพิ่มเข้าไปในฐานข้อมูล 
	$sql = "UPDATE member SET
	m_img_edu='$newname',
	m_graduate='$m_graduate',
	m_faculy='$m_faculy',
	m_confirm_date='$m_confirm_date'
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
	echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'index.php?act=con'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}
?>