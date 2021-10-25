<?php
if (isset($_GET['p_id'])) {
  $p_id = escape($_GET['p_id']);


  $query = "SELECT * FROM clients WHERE client_id = $p_id";

  $result = mysqli_query($connection, $query);

  confirm($result);

  while ($row = mysqli_fetch_assoc($result)) {
    $client_id = $row['client_id'];
    $client_name = $row['client_name'];
    $client_phone = $row['client_phone'];
    $client_email = $row['client_email'];
    $client_number = $row['client_number'];
    $client_balance = $row['client_balance'];
  }
}
if (isset($_POST['update_client'])) {
  $client_name = escape($_POST['client_name']);
  $client_phone = escape($_POST['client_phone']);
  $client_email = escape($_POST['client_email']);
  $client_number = escape($_POST['client_number']);
  $client_balance = escape($_POST['client_balance']);


  $query = "UPDATE `clients` SET `client_name` = '$client_name', `client_phone` = '$client_phone', `client_email` = '$client_email', `client_number` = '$client_number', `client_balance` = '$client_balance' WHERE `clients`.`client_id` = $p_id;";

  $update_client = mysqli_query($connection, $query);

  confirm($update_client);
}
?>







<form action="" method="POST" class="col-6">

  <div class="form-group">
    <label for="title"> Client Name</label>
    <input type="text" class="form-control" value="<?php echo $client_name; ?>" name="client_name">
  </div>

  <div class="form-group">
    <label for="post_category"> Client Phone </label>
    <input type="text" class="form-control" value="<?php echo $client_phone; ?>" name="client_phone">
  </div>
  <div class="form-group">
    <label for="post_status"> Client Email</label>
    <input type="text" class="form-control" value="<?php echo $client_email; ?>" name="client_email">
  </div>
  <div class="form-group">
    <label for="post_image"> Client Number</label>
    <input type="text" class="form-control" value="<?php echo $client_number; ?>" name="client_number">
  </div>
  <div class="form-group">
    <label for="post_tags"> Client Balance</label>
    <input type="text" class="form-control" value="<?php echo $client_balance; ?>" name="client_balance">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_client" value="Add client">
  </div>
</form>