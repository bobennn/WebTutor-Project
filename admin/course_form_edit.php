<?php 
//query course
$ID = $_GET['ID'];
$sql = "
SELECT * 
FROM course as c
INNER JOIN course_type as t ON c.ref_t_id=t.t_id
WHERE c.c_id=$ID";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

$ref_t_id = $row['ref_t_id'];

// echo $sql;

// echo '<pre>';
// print_r($row);
// echo '</pre>';
// exit;

//query course type
$query = "SELECT * FROM course_type 
WHERE t_id!=$ref_t_id" or die("Error:" . mysqli_error());
$result2 = mysqli_query($condb, $query);

?>

<h4> รายละเอียดคอร์สสอน </h4>
<form action="course_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ประเภทวิชา :
    </div>
    <div class="col-sm-4">
      <select name="ref_t_id" class="form-control" required disabled>
        <option value="<?php echo $row['ref_t_id'] ?>">-<?php echo $row['t_name'] ?>-</option>
        <option value="">-เลือกข้อมูล-</option>
        <?php foreach($result2 as $results){ ?>
        <option value="<?php echo $results["t_id"];?>">
          - <?php echo $results["t_name"];?>
          </option>
      <?php } ?>
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อคอร์สสอน :
    </div>
    <div class="col-sm-10">
      <input type="text" name="c_name" required class="form-control" value="<?php echo $row['c_name']; ?>" disabled>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รายละเอียด:
    </div>
    <div class="col-sm-10" >
      <textarea name="c_detail" class="form-control" required id="editor" ><?php echo $row['c_detail']; ?></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ราคาต่อชั่วโมง :
    </div>
    <div class="col-sm-2">
      <input type="number" name="c_price" required class="form-control"  value="<?php echo $row['c_price']; ?>" disabled>
    </div>
  </div>
 
  <!-- <div class="form-group">
    <div class="col-sm-2 control-label">
      ภาพสินค้า :
    </div>
    <div class="col-sm-4">
      <input type="file" name="p_img" required accept="image/*" class="form-control">
    </div>
  </div> -->
 <!-- 
  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
       <input type="hidden" name="c_id"  value="<?php echo $c_id;?>">
      <button type="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div> -->

</form>
<script>
initSample();
</script>