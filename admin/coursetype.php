<?php include('hder.php'); //css ?>
<body>
  <?php include('nav.php'); //menu?>
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-6">
        <h4>::จัดการประเภทรายวิชา::
          <a href="coursetype.php?act=add" class="btn btn-success"> +เพิ่ม</a>
        </h4>
        <br>
       <?php 
       $act = (isset($_GET['act']) ? $_GET['act'] : '');

       if($act=='add'){
        include('coursetype_form_add.php');
       }elseif($act=='edit') {
        include('coursetype_form_edit.php');
       }else{
        include('coursetype_list.php');
       }

       ?>

      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>
<?php include('js.php'); //js?>