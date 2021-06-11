<img src="../mimg/<?php echo $m_img;?>" alt="" class="img-circle" style="width:170px;height:200px;margin-bottom:20px;"> 
<!-- Last Login:
<br>
<?php echo date('d/m/Y H:i:s', strtotime($lastlogin));  ?> -->

<div class="list-group">
	<a href="index.php" class="list-group-item active">หน้าหลัก</a>
	<a href="index.php?act=edit" class="list-group-item ">แก้ไขโปรโฟล์</a>
	<a href="index.php?act=pwd" class="list-group-item ">แก้ไขรหัสผ่าน</a>
	<a href="course.php" class="list-group-item">คอร์สสอน</a>
	<a href="index.php?act=con" class="list-group-item">แจ้งยืนยันตัวตน</a>

	<a href="../logout.php" onclick="return confirm('Confirm?');" class="list-group-item list-group-item-danger">ออกจากระบบ</a>
</div>