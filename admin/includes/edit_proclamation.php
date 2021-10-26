<?php
if (isset($_GET['p_id'])) {
  $p_id = escape($_GET['p_id']);


  $query = "SELECT * FROM proclamation WHERE pro_id = $p_id";

  $result = mysqli_query($connection, $query);

  confirm($result);

  while ($row = mysqli_fetch_assoc($result)) {
    $pro_id = $row['pro_id'];
    $pro_title = $row['pro_title'];
    $pro_image = $row['pro_img'];
    $pro_pdf = $row['pro_pdf'];
    $pro_date = $row['pro_date'];
  }
}
if (isset($_POST['update_proclamation'])) {
  $pro_title = escape($_POST['pro_title']);


  $pro_img = $_FILES['pro_img']['name'];
  $pro_image_temp = $_FILES['pro_img']['tmp_name'];

  
  $pro_pdf = $_FILES['pro_pdf']['name'];
  $pro_pdf_temp = $_FILES['pro_pdf']['tmp_name'];

  $pro_date = date('d-m-y');

  move_uploaded_file($pro_image_temp, "../pro_img/$pro_img");
  move_uploaded_file($pro_pdf_temp, "../pro_pdf/$pro_pdf");
  if (empty($pro_image) || empty($pro_pdf)) {
    $image_query = "SELECT * FROM proclamation WHERE pro_id = $p_id ";
    $selected_image = mysqli_query($connection, $image_query);

    while ($row = mysqli_fetch_assoc($selected_image)) {
      $pro_image = $row['pro_img'];
    }
  }

  $query = "UPDATE `proclamation` SET `pro_title` = '$pro_title', `pro_img` = '$pro_img', `pro_pdf` = '$pro_pdf' WHERE `proclamation`.`pro_id` = $p_id ";

  $update_proclamation = mysqli_query($connection, $query);

  confirm($update_proclamation);
}
?>





<form action="" method="POST" class="col-6" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title"> Proclamation Title</label>
    <input type="text" class="form-control" value="<?php echo $pro_title; ?>" name="pro_title">
  </div>


  
  <div class="form-group">
    <label for="post_image"> Proclamation Image</label>

    <img width="100" src="../pro_img/<?php echo $pro_image ?>" style="display: block; margin-bottom: 1rem;" alt="">

    <input type="file" name="pro_img">
  </div>

  <div class="form-group">
    <label for="post_image"> Proclamation Attachment:</label>

    <p> <?php echo $pro_pdf ?> </p> 

    <input type="file" name="pro_pdf">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_proclamation" value="Update Proclamation">
  </div>
</form>