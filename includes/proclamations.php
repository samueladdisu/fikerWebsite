<?php include './includes/db.php'; ?>



<?php

$query = "SELECT * FROM proclamation";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $pro_id = $row['pro_id'];
  $pro_title = $row['pro_title'];
  $pro_desc = $row['pro_desc'];
  $pro_pdf = $row['pro_pdf'];
  $pro_year= $row['pro_year'];
  $pro_date = $row['pro_date'];
?>
  <div class="single-blog" data-id="<?php echo $pro_year;  ?>">
   
    <div class="blog-content">
      <h2 class="blog-content-title">
        <?php echo $pro_title; ?>
       
      </h2>
      <p class="blog-content-desc">
      <?php echo $pro_desc; ?>
      </p>

      <p class="blog-text">
        <?php //echo $post_content; ?>
      </p>
       <a href="./pro_pdf/<?php echo $pro_pdf; ?>" download>Download Proclamation
        <img src="./img/right-arrow.svg" alt="" />
      </a> 
      
      <?php 
      
      //echo '<a href="download.php?file=' . urlencode($pro_pdf) . '">Download Proclamation</a>';
      ?>
      <hr />

      <div class="blog-footer">
        <div class="blog-time">
          <img src="./img/clock.svg" alt="" />
          <p><?php echo $pro_date; ?></p>
        </div>

        <div class="blog-duration"><?php //echo $post_duration; ?></div>
      </div>
    </div>
  </div>

<?php }
?>

