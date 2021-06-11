<?php 
$ID = $_GET['ID'];
$sql = "SELECT * FROM member WHERE m_id=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

// echo $sql;
// echo '<pre>';
// print_r($row);
// echo '</pre>';
// exit;

?>

<h4> รายละเอียดสมาชิก </h4>
<form action="member_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      ระดับผู้ใช้ :
    </div>
    <div class="col-sm-3">
      <select name="m_level" class="form-control" required disabled>
        <option value="<?php echo $row['m_level'] ?>">-<?php echo $row['m_level'] ?>-</option>
        <option value="">-เลือกข้อมูล-</option>
        <option value="ADMIN">-ADMIN-</option>
        <option value="MEMBER">-MEMBER-</option>
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      ชื่อผู้ใช้ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_username" required class="form-control" autocomplete="off" value="<?php echo $row['m_username']; ?>" disabled>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      ชื่อจริง : 
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_fname" required class="form-control" value="<?php echo $row['m_fname']; ?>" disabled>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_lname" required class="form-control" value="<?php echo $row['m_lname']; ?>" disabled>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
       เพศ :
    </div>
    <div class="col-sm-3">
      <select name="m_gender" class="form-control" required disabled>
        <option value="<?php echo $row['m_gender'] ?>">-<?php echo $row['m_gender'] ?>-</option>
        <option value="">-เลือกข้อมูล-</option>
        <option value="หญิง">-หญิง-</option>
        <option value="ชาย">-ชาย-</option>
        <option value="เพศที่สาม">-เพศที่สาม-</option> 
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      อีเมล์ :
    </div>
    <div class="col-sm-6">
      <input type="email" name="m_email" required class="form-control" value="<?php echo $row['m_email']; ?>" disabled>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      เบอร์ติดต่อ :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_phone" required class="form-control" value="<?php echo $row['m_phone']; ?>" disabled>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      ไอดีไลน์ :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_line" required class="form-control" value="<?php echo $row['m_line']; ?>" disabled>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      กำลังศึกษา/จบการศึกษาจาก :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_graduate" maxlength="100" required class="form-control" value="<?php echo $row['m_graduate']; ?>" disabled>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      คณะ :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_faculy" maxlength="100" required class="form-control" value="<?php echo $row['m_faculy']; ?>" disabled>
    </div>
  </div>

   <!-- <div class="form-group">
    <div class="col-sm-3 control-label">
      ประสบการณ์สอนสั้นๆ :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_experience" maxlength="100" required class="form-control" value="<?php echo $row['m_experience']; ?>" disabled>
    </div>
  </div> -->
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      รูปประจำตัว :
    </div>
    <div class="col-sm-6">
      <br>
      <img src="../mimg/<?php echo $row['m_img'];?>" width=200 height=200>
      <!-- <br>
      เลือกภาพใหม่ <br>
      <input type="file" name="m_img" class="form-control" accept="image/*"> -->
    </div>
  </div>


  <!-- <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="m_img2" value="<?php echo $row['m_img'];?>">
      <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
      <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    </div>
  </div> -->
  
</form>