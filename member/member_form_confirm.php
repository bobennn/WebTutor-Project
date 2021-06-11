<h4>::แจ้งการยืนยันตัวตน::</h4>
<br>
<form action="member_form_confirm_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <br>
  <div class="form-group">
    <div class="col-sm-3 control-label">
      สถานะการยืนยันตัวตน :
    </div>
    <div class="col-sm-3">
      <input type="text" name="m_status" required class="form-control" autocomplete="off" 
      value="
      <?php $m_status = $row["m_status"];
            if($m_status==0){
              echo 'ยังไม่ได้ยืนยันตัวตน';
            }else{
              echo 'ยืนยันตัวตนแล้ว';
            }; ?>" disabled>
    </div>
  </div>

  <!-- <div class="form-group">
    <div class="col-sm-3 control-label">
      รหัสบัตรประชาชน :
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
      <input type="text" name="m_number" maxlength="13" onKeyUp="javascript:check_is_phone(this);" required class="form-control">
    </div>
  </div> -->
  
  
 <!--  <div class="form-group">
    <div class="col-sm-3 control-label">
      สำเนาบัตรประชาชน :
    </div>
    <div class="col-sm-6">
      เลือกภาพ <br>
      <input type="file" id="m_img_card" name="m_img_card" class="form-control" accept="image/*" required>
    </div>
  </div> -->

  <div class="form-group">
    <div class="col-sm-3 control-label">
      กำลังศึกษา/จบการศึกษาจาก :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_graduate" maxlength="100" required class="form-control" value="<?php echo $row['m_graduate']; ?>" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-3 control-label">
      คณะ :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_faculy" maxlength="100" required class="form-control" value="<?php echo $row['m_faculy']; ?>" >
    </div>
  </div>

    <div class="form-group">
    <div class="col-sm-3 control-label">
      สำเนาใบรับรองการศึกษา/
      <br>ใบจบการศึกษา :
    </div>
    <div class="col-sm-6">
      ภาพเก่า <br>
      <img src="../edu_img/<?php echo $row['m_img_edu'];?>" width="200px">
      <br>
      <input type="file" id="m_img_edu" name="m_img_edu" class="form-control" accept="image/*" required>
      <h6>
        **เงื่อนไขการยืนยัน : ข้อมูลในสำเนาต้องตรงกับข้อมูลการศึกษาที่กรอกไว้ข้างต้น**
      </h6>
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="m_img2" value="<?php echo $row['m_img'];?>">
      <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
      <input type="hidden" name="m_confirm_date" value="<?php echo date('Y-m-d H:i:s');?>">
      <button type="submit" class="btn btn-info">บันทึก</button>
      <h6>
        หมายเหตุ : การยืนยันตัวตนใช้เวลาประมาณ 2-3 วัน 
      </h6>
    </div>
  </div>
  
</form>