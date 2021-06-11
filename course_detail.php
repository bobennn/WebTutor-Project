<?php 
//query course
$c_id = $_GET['c_id'];
$sql = "
SELECT * 
FROM course as c
INNER JOIN course_type as t ON c.ref_t_id=t.t_id
INNER JOIN member as m ON c.ref_m_id=m.m_id
WHERE c.c_id=$c_id";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

// echo $sql;

// echo '<pre>';
// print_r($row);
// echo '</pre>';

//update view course
	$sql2 = "UPDATE course SET 
	c_view=c_view+1
	WHERE c_id=$c_id
	";

	$result2 = mysqli_query($condb, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-xs-12">
		<img src="mimg/<?php echo $row['m_img'];?>" class="img-circle" style="width:250px;height:250px;margin-bottom:20px;" >
		<p>
			<font color="blue"> 
				<h5> 
				ชื่อผู้สอน :
				<?php echo $row['m_fname']
				.' '
				.$row['m_lname'];?>
				<br>
				<br>
				เพศ : 
				<?php echo $row['m_gender'] ;?> 
				<br>
				<br>
				กำลังศึกษา/จบการศึกษาจาก : 
				<br> 
				<?php echo $row['m_graduate'] ;?>
				<br>
				<br>  
				คณะ : 
				<br> 
				<?php echo $row['m_faculy'] ;?>
				<br>
				<br>  
				ประสบการณ์สอน : 
				<br> 
				<?php echo $row['m_experience'] ;?>
				<br>
				<br>  
				อีเมล์ : 
				<?php echo $row['m_email'] ;?>
				<br>
				<br> 
				ไลน์ไอดี :
				<?php echo $row['m_line'] ;?>
				<br>
				<br> 
				เบอร์ติดต่อ :
				<?php echo $row['m_phone'] ;?>
				<br>
				<br>  
				การยืนยันตัวตน :
				<?php 
				$m_status = $row["m_status"];
            	if($m_status==0){
              	echo 'ยังไม่ได้ยืนยันตัวตน';
            	}else{
              	echo 'ยืนยันตัวตนแล้ว';
            	}; ?>

				</h5> 
				
				
			</font>  

		</p>	
		</div>
		<div class="col-md-6 col-xs-12">
			<h3>
				<?php echo $row['c_name'];?>
			</h3>
			<h4>
				<font color="red"> ราคาสอน <?php echo number_format($row['c_price'],2);?> บาทต่อชั่วโมง </font>  
			</h4>
			<p>
				<br>
				<?php echo $row['c_detail'];?>
				<br>
				จำนวนการเข้าชม <?php echo $row['c_view'];?> ครั้ง
			</p>

			<p>
				<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e49639d59a6de4b"></script>

				<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
			</p>

			<p>
				<h4> แสดงความคิดเห็น </h4>
				<form action="comment_save.php" method="post" class="form-horizontal">
					<textarea name="cm_detail" class="form-control" required></textarea>
					<br>
					<input type="hidden" name="ref_c_id" value="<?php echo $row['c_id'];?>">
					<button type="submt" class="btn btn-warning">แสดงความคิดเห็น</button>
					
				</form>
			</p>
			<p>
				<h4> รายการแสดงความคิดเห็น </h4>
				<?php include('comment_list.php') ?>

			</p>
		</div>

		
	</div>	
</div>