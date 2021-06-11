<?php
$ps = $_GET['ps'];
$pe = $_GET['pe'];
//query ข้อมูลจากตาราง tb_member:
$query = "
SELECT c.*,m.m_img
FROM course as  c
INNER JOIN member as m ON c.ref_m_id=m.m_id
WHERE c.c_price
BETWEEN $ps AND $pe
AND c.c_status=1 
ORDER BY c.c_id DESC"
or die("Error:" . mysqli_error());
// echo $query;
// exit;

//เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($condb, $query);
?>

<!-- start course -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3> :: คอร์สเรียนทั้งหมด ::</h3>
    </div>
    <?php while($row = mysqli_fetch_array($result)) { ?>
      <div class="col-sm-6 col-md-3" style="width:292px; height:400px; margin-bottom: 20px;">
        <div class="thumbnail">
          <img src="mimg/<?php echo $row['m_img'];?>" style="width:300px;height:200px">
          <div class="caption">
            <h4 style="width:240px; height:60px; overflow:hidden; line-height:15pt;">
              <?php echo $row['c_name'];?>
            </h4>
            <h5>
              <font color="red"> ราคาสอน <?php echo number_format($row['c_price'],2);?> บาทต่อชั่วโมง </font>
            </h5>
            <p>
              <a href="detail.php?c_id=<?php echo $row['c_id'];?>" class="btn btn-info" role="button" style="width:100%" >รายละเอียด</a> 
              <!-- <a href="#" class="btn btn-default" role="button">Button</a></p> -->
            </p>
          </div>
        </div>
      </div>
    
    
    <?php } ?>
  </div>
</div>
<!-- end course -->