<!-- start banner -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <img src="img/b455.jpg" width="100%">
    </div>
  </div>
</div>
<!-- end banner -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สมัครสมาชิก</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <!-- start menu -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="index.php">หน้าหลัก</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <!-- <li><a href="index.html">หน้าแรก</a></li> -->
                  <li><a href="login.php">เข้าสู่ระบบ</a></li>
                  <li><a href="register.php">สมัครสมาชิก</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
          </div>
        </div>
        <!-- end menu -->
        <!-- start form login-->
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
              <h3>สมัครสมาชิก</h3>
              <form action="register_add_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <br>
                
                <div class="form-group">
                  <div class="col-sm-3 control-label">
                    ชื่อผู้ใช้ :
                  </div>
                  <div class="col-sm-5">
                    <script>
                    function check_is_username(sensor){
                    var regExp = /[A-Za-z0-9]$/;
                    if(!regExp.test(sensor.value)){
                    alert("โปรดกรอกเฉพาะตัวอักษรภาษาอังกฤษและตัวเลขเท่านั้น");
                    sensor.value = sensor.value.substring(0, sensor.value.length -1);
                    }
                    }
                    </script>
                    <input type="text" name="m_username" onKeyUp="javascript:check_is_username(this);" required class="form-control" maxlength="20">
                   
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-3 control-label">
                    รหัสผ่าน :
                  </div>
                  <div class="col-sm-5">
                    <input type="password" name="m_password" required class="form-control" maxlength="20">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-3 control-label">
                    ชื่อจริง :
                  </div>
                  <div class="col-sm-5">
                    <script>
                    function check_is_fname(sensor){
                    var regExp = /[A-Za-zกข-๙]$/;
                    if(!regExp.test(sensor.value)){
                    alert("โปรดกรอกข้อมูลให้ถูกต้อง");
                    sensor.value = sensor.value.substring(0, sensor.value.length -1);
                    }
                    }
                    </script>
                    
                    <input type="text" name="m_fname" onKeyUp="javascript:check_is_fname(this);" required class="form-control" maxlength="20">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-3 control-label">
                    นามสกุล :
                  </div>
                  <div class="col-sm-5">
                    <script>
                    function check_is_lname(sensor){
                    var regExp = /[A-Za-zกข-๙]$/;
                    if(!regExp.test(sensor.value)){
                    alert("โปรดกรอกข้อมูลให้ถูกต้อง");
                    sensor.value = sensor.value.substring(0, sensor.value.length -1);
                    }
                    }
                    </script>
                    <input type="text" name="m_lname" onKeyUp="javascript:check_is_lname(this);" required class="form-control" maxlength="20">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-3 control-label">
                    เพศ :
                  </div>
                  <div class="col-sm-5">
                    <select name="m_gender" class="form-control" required>
                      <option value="">-เลือกเพศ-</option>
                      <option value="หญิง">-หญิง-</option>
                      <option value="ชาย">-ชาย-</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-3 control-label">
                    อีเมล์ :
                  </div>
                  <div class="col-sm-5">
                    <script>
                    function check_is_email(sensor){
                    var regExp = /[^ก-๙]$/;
                    if(!regExp.test(sensor.value)){
                    alert("โปรดกรอก E-mail ให้ถูกต้อง");
                    sensor.value = sensor.value.substring(0, sensor.value.length -1);
                    }
                    }
                    </script>
                    <input type="email" name="m_email" onKeyUp="javascript:check_is_email(this);" required class="form-control" maxlength="50">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-3 control-label">
                    เบอร์ติดต่อ :
                  </div>
                  <div class="col-sm-5">
                    <script>
                    function check_is_phone(sensor){
                    var regExp = /[0-9]$/;
                    if(!regExp.test(sensor.value)){
                    alert("โปรดกรอกเฉพาะตัวเลขเท่านั้น");
                    sensor.value = sensor.value.substring(0, sensor.value.length -1);
                    }
                    }
                    </script>
                    <input type="text" name="m_phone" onKeyUp="javascript:check_is_phone(this);" required class="form-control"  maxlength="10">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-3 control-label">
                    ไลน์ไอดี :
                  </div>
                  <div class="col-sm-5">
                    <script>
                    function check_is_line(sensor){
                    var regExp = /[^ก-๙]$/;
                    if(!regExp.test(sensor.value)){
                    alert("โปรดกรอก Line id ให้ถูกต้อง");
                    sensor.value = sensor.value.substring(0, sensor.value.length -1);
                    }
                    }
                    </script>
                    <input type="text" name="m_line" onKeyUp="javascript:check_is_line(this);" required class="form-control" maxlength="20">
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
        <!-- end form-->
        
        <!-- start footer -->
        <div class="container ft">
          <div class="row">
            <div align="right" class="col-xs-12 col-md-12">
              <h4>
              ติดต่อเรา<br>
              </h4>
              <p>
                <i class="glyphicon glyphicon-user"></i> นางสาวเบญญา คงแก้ว <br>
                <i class="glyphicon glyphicon-home"></i> 120 หมู่4 ตำบลกำแพงแสน<br>อำเภทกำแพงแสน จังหวัดนครปฐม <br>รหัสไปรษณี 73140<br>
                <i class="glyphicon glyphicon-earphone"></i> 092-5350081 <br>
                <i class="glyphicon glyphicon-envelope"></i> benya.ko@ku.th
              </p>
            </div>
          </div>
          <!-- end footer -->
          
        </body>
      </html>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>