<?php
if (isset($_POST['create_proclamation'])) {
  $pro_title = escape($_POST['pro_title']);


  $pro_image = $_FILES['pro_image']['name'];
  $pro_image_temp = $_FILES['pro_image']['tmp_name'];

  
  $pro_pdf = $_FILES['pro_pdf']['name'];
  $pro_pdf_temp = $_FILES['pro_pdf']['tmp_name'];

  $pro_date = date('d-m-y');

  move_uploaded_file($pro_image_temp, "../pro_img/$pro_image");
  move_uploaded_file($pro_pdf_temp, "../pro_pdf/$pro_pdf");

  $query = "INSERT INTO proclamation(pro_title, pro_img, pro_pdf, pro_date) ";
  $query .= "VALUES('$pro_title','$pro_image','$pro_pdf',now() ) ";

  $result = mysqli_query($connection, $query);

  confirm($result);
}



?>





<form action="" method="POST" class="col-6" enctype="multipart/form-data">

  <div class="form-group">
    <label for="title"> Proclamation Title</label>
    <input type="text" class="form-control" name="pro_title">
  </div>
  <div class="form-group">
    <label for="post_image"> Proclamation Image</label>
    <input type="file" name="pro_image">
  </div>
  <div class="form-group">
    <label for="post_image"> Proclamation Attachment</label>
    <input type="file" name="pro_pdf">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_proclamation" value="Publish Proclamation">
  </div>
</form>