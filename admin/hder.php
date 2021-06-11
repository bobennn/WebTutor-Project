<?php 
session_start();
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
include('../condb.php');

//สร้างตัวแปรจาก session 
$m_id = $_SESSION['m_id'];
$m_fname = $_SESSION['m_fname'];
$m_level = $_SESSION['m_level'];

//query member login 
$sql = "SELECT m_fname, m_img FROM member WHERE m_id=$m_id";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

$m_img = $row['m_img'];
$m_fname = $row['m_fname'];

// echo 'my image = '.$m_img;
// echo '<br>';

// echo 'login by '.$m_fname;
// echo '<br>';

// echo $sql;

// echo '<pre>';
// print_r($row);
// echo '</pre>';

// echo 'm_id = ' .$m_id;
// echo '<br>';
// echo 'name = '.$m_name;
// echo '<br>';
// echo 'level = '.$m_level;



//เงื่อนไขการตรวจสิทธิ์  admin 
if($m_level!='ADMIN'){
	Header("Location: ../logout.php");
}


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>my backend</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<!--start data table-->
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js">
		</script>
		<!-- <script>
		$(document).ready(function() {
		$('#example').DataTable( {
		"aaSorting" :[[0,'desc']],
		//"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
		});
		} );
		</script> -->
		<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
		$('#example').dataTable( {
		"aaSorting" :[[0,'desc']],
		"oLanguage": {
		"sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
		"sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
		"sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
		"sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
		"sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
		"sSearch": "ค้นหา :",
		"aaSorting" :[[0,'desc']],
		"oPaginate": {
		"sFirst":    "หน้าแรก",
		"sPrevious": "ก่อนหน้า",
		"sNext":     "ถัดไป",
		"sLast":     "หน้าสุดท้าย"
		},
		}
		} );
		} );
		</script>
		<!-- end data table -->
	</head>

