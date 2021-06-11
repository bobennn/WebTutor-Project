<h4>เพิ่มสมาชิก </h4>
<form action="member_form_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      ระดับผู้ใช้ :
    </div>
    <div class="col-sm-4">
      <select name="m_level" class="form-control" required>
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
      <input type="text" name="m_username" required class="form-control" autocomplete="off">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      รหัสผ่าน :
    </div>
    <div class="col-sm-4">
      <input type="password" name="m_password" required class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      ชื่อจริง :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_fname" required class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_lname" required class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
       เพศ :
    </div>
    <div class="col-sm-4">
      <select name="m_gender" class="form-control" required>
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
    <div class="col-sm-4">
      <input type="email" name="m_email" required class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      เบอร์ติดต่อ :
    </div>
    <div class="col-sm-4">
      <script>
      function check_is_phone(sensor){
      var regExp = /[0-9]$/;
      if(!regExp.test(sensor.value)){
      alert("โปรดกรอกเฉพาะตัวเลขเท่านั้น");
      sensor.value = sensor.value.substring(0, sensor.value.length -1);
      }
      }
      </script>
      <input type="text" name="m_phone" maxlength="10" onKeyUp="javascript:check_is_phone(this);" required class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      ไอดีไลน์ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_line" required class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      รูปประจำตัว :
    </div>
    <div class="col-sm-4">
      <input type="file" name="m_img" required class="form-control" accept="image/*">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
    </div>
  </div>
  
</form>