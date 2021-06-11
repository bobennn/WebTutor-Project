<?php

$query = "
SELECT t.* ,COUNT(c.c_id) as ctotal
FROM course_type as t
LEFT JOIN course as c ON t.t_id=c.ref_t_id
-- WHERE c.c_status=1
GROUP BY t.t_id
" or die("Error:" . mysqli_error());

$result = mysqli_query($condb, $query); 

?>

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
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">เลือกประเภทรายวิชา <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <?php while($row = mysqli_fetch_array($result)) { ?>
                      <li>
                        <a href="index.php?act=showbytype&t_id=<?php echo $row["t_id"];?>&name=<?php echo $row["t_name"];?>"> 
                          <?php echo $row["t_name"];?> 
                          (<?php echo $row["ctotal"];?>)
                        </a>
                      </li>
                      <?php } ?>
                    </ul>
                  </li>

                </ul>

                 <form class="navbar-form navbar-right" method="get" action="index.php">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Keyword" name="search" required>
                  </div>
                  <button type="submit" name="act" value="q" class="btn btn-danger">ค้นหา</button>
                </form>

        
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
          </div>
        </div>
        <!-- end menu -->