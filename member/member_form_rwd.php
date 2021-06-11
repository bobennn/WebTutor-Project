<h4>::เปลี่ยนรหัสผ่าน::</h4>
<br>
<form action="member_form_rwd_db.php" method="post" class="form-horizontal">
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      ชื่อผู้ใช้ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_username" required class="form-control" autocomplete="off" value="<?php echo $row['m_username'];?>" disabled>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3 control-label">
      รหัสผ่านใหม่ :
    </div>
    <div class="col-sm-4">
      <input type="password" name="m_password1" required class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      ยืนยันรหัสผ่าน :
    </div>
    <div class="col-sm-4">
      <input type="password" name="m_password2" required class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
      <button type="submit" class="btn btn-info">บันทึก</button>
    </div>
  </div>
</form>