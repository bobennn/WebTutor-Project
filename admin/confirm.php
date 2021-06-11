<?php include('hder.php'); //css ?>
<body>
  <?php include('nav.php'); //menu?>
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-10">
        <h4>::การยืนยันตัวตนสมาชิก::
        </h4>
        <br>
       <?php 
       $act = (isset($_GET['act']) ? $_GET['act'] : '');

  
        include('confirm_list.php');
    

       ?>

      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>