<?php 
$t_id = $_GET['ID'];
$sql = "SELECT * FROM course_type WHERE t_id=$t_id";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);

// echo $sql;
// echo '<pre>';
// print_r($row);
// echo '</pre>';

?>

<h4>เพิ่มแก้ไขประเภทรายวิชา </h4>
<form action="coursetype_form_edit_db.php" method="post" class="form-horizontal">
  
  <div class="form-group">
    <div class="col-sm-4 control-label">
      ชื่อรายวิชา :
    </div>
    <div class="col-sm-7">
      <input type="text" name="t_name" required class="form-control" value="<?php echo $row['t_name']; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-1">
      <input type="hidden" name="t_id" value="<?php echo $row['t_id']; ?>">
      <button type="submit" class="btn btn-primary">บันทึก</button>
    </div>
  </div>

</form>