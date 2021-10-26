<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Image</th>
      <th>Attachment</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $query = "SELECT * FROM proclamation";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
      $pro_id = $row['pro_id'];
      $pro_title = $row['pro_title'];
      $pro_img = $row['pro_img'];
      $pro_pdf = $row['pro_pdf'];
      $pro_date = $row['pro_date'];
   
      echo "<tr>";
      echo "<td>{$pro_id}</td>";
      echo "<td>{$pro_title}</td>";
      echo "<td><img width='100' src='../pro_img/{$pro_img}'></td>";
  
      echo "<td> $pro_pdf</td>";
      echo "<td>$pro_date</td>";
      echo "<td><a href='proclamations.php?source=edit_proclamation&p_id=$pro_id'>Edit</a></td>";
      echo "<td><a href='proclamations.php?delete=$pro_id'>Delete</a></td>";
      echo "</tr>";
    }


    ?>

  </tbody>
</table>

<?php

if (isset($_GET['delete'])) {
  $the_post_id = escape($_GET['delete']);
  $query = "DELETE FROM proclamation WHERE pro_id = $the_post_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
  header("Location: ./proclamations.php");
}



?>