<?php 
include('header.php');  
include('banner.php');
include('menu.php');
include('form_search_by_price.php');
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if($act=='showbytype'){
	include('list_course_by_type.php');
}elseif ($act=='q') {
	include('list_course_by_search2column.php');
}elseif ($act=='p') {
	include('list_course_by_price.php');
}else{
	include('list_course.php');
}
include('footer.php');
?>

        

        