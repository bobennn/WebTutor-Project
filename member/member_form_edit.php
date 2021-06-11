
<h4>::แก้ไขข้อมูลสมาชิก::</h4>
<br>
<form action="member_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  
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
      <script>
      function check_is_fname(sensor){
      var regExp = /[A-Za-zกข-๙]$/;
      if(!regExp.test(sensor.value)){
      alert("โปรดกรอกข้อมูลให้ถูกต้อง");
      sensor.value = sensor.value.substring(0, sensor.value.length -1);
      }
      }
      </script>
      <input type="text" name="m_fname" maxlength="20" onKeyUp="javascript:check_is_fname(this);" required class="form-control" value="<?php echo $row['m_fname']; ?>" >
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-4">
      <script>
      function check_is_lname(sensor){
      var regExp = /[A-Za-zกข-๙]$/;
      if(!regExp.test(sensor.value)){
      alert("โปรดกรอกข้อมูลให้ถูกต้อง");
      sensor.value = sensor.value.substring(0, sensor.value.length -1);
      }
      }
      </script>
      <input type="text" name="m_lname" maxlength="20" onKeyUp="javascript:check_is_lname(this);" required class="form-control" value="<?php echo $row['m_lname']; ?>" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      เพศ :
    </div>
    <div class="col-sm-3">
      <select name="m_gender" class="form-control" required>
        <option value="<?php echo $row['m_gender'] ?>">-<?php echo $row['m_gender'] ?>-</option>
        <option value="">-เลือกข้อมูล-</option>
        <option value="หญิง">-หญิง-</option>
        <option value="ชาย">-ชาย-</option>
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      อีเมล์ :
    </div>
    <div class="col-sm-6">
      <input type="email" name="m_email" required class="form-control" value="<?php echo $row['m_email']; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      เบอร์ติดต่อ :
    </div>
    <div class="col-sm-6">
      <script>
      function check_is_phone(sensor){
      var regExp = /[0-9]$/;
      if(!regExp.test(sensor.value)){
      alert("โปรดกรอกเฉพาะตัวเลขเท่านั้น");
      sensor.value = sensor.value.substring(0, sensor.value.length -1);
      }
      }
      </script>
      <input type="text" name="m_phone" maxlength="10" onKeyUp="javascript:check_is_phone(this);" required class="form-control" value="<?php echo $row['m_phone']; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      ไลน์ไอดี :
    </div>
    <div class="col-sm-6">
      <script>
      function check_is_line(sensor){
      var regExp = /[^ก-๙]$/;
      if(!regExp.test(sensor.value)){
      alert("โปรดกรอก Line id ให้ถูกต้อง");
      sensor.value = sensor.value.substring(0, sensor.value.length -1);
      }
      }
      </script>
      <input type="text" name="m_line" maxlength="20" onKeyUp="javascript:check_is_line(this);" required class="form-control" value="<?php echo $row['m_line']; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      กำลังศึกษา/จบการศึกษาจาก :
    </div>
    <div class="col-sm-6">
      <!-- <script>
      function check_is_graduate(sensor){
      var regExp = /[A-Za-zกข-๙]$/;
      if(!regExp.test(sensor.value)){
      alert("โปรดกรอกข้อมูลให้ถูกต้อง");
      sensor.value = sensor.value.substring(0, sensor.value.length -1);
      }
      }
      </script> -->
      <input type="text" name="m_graduate" maxlength="100" onKeyUp="javascript:check_is_graduate(this);" class="form-control" value="<?php echo $row['m_graduate']; ?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      คณะ :
    </div>
    <div class="col-sm-6">
      <script>
      function check_is_faculy(sensor){
      var regExp = /[A-Za-zกข-๙]$/;
      if(!regExp.test(sensor.value)){
      alert("โปรดกรอกข้อมูลให้ถูกต้อง");
      sensor.value = sensor.value.substring(0, sensor.value.length -1);
      }
      }
      </script>
      <input type="text" name="m_faculy" maxlength="100" onKeyUp="javascript:check_is_faculy(this);" class="form-control" value="<?php echo $row['m_faculy']; ?>">
    </div>
  </div>

   <div class="form-group">
    <div class="col-sm-3 control-label">
      ประสบการณ์สอน :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_experience" class="form-control" maxlength="300"  value="<?php echo $row['m_experience']; ?>" >
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      รูปประจำตัว :
    </div>
    <div class="col-sm-6">
      ภาพเก่า <br>
      <img src="../mimg/<?php echo $row['m_img'];?>" width="200px">
      <br>
      เลือกภาพใหม่ <br>
      <input type="file" name="m_img" class="form-control" accept="image/*">
      <h6>
        **หมายเหตุ : ขนาดรูปภาพที่เหมาะสมคือ 300px x 200px**
      </h6>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="m_img2" value="<?php echo $row['m_img'];?>">
      <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
      <button type="submit" class="btn btn-info">บันทึก</button>
    </div>
  </div>
  
</form>