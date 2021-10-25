<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Bank ref Number</th>
      <th>Amount</th>
      <th>Status</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $query = "SELECT * FROM confirm_payment ORDER BY date DESC";
    $payment_result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($payment_result)) {
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $ref_number = $row['ref_number'];
      $balance = $row['balance'];
      $status = $row['status'];
      $date = $row['date'];

      echo "<tr>";
      echo "<td>{$id}</td>";
      echo "<td>{$name}</td>";
      echo "<td>{$email}</td>";
      echo "<td>{$ref_number}</td>";
      echo "<td>{$balance} birr</td>";
      echo "<td>{$status}</td>";
      echo "<td>{$date}</td>";
      echo "<td><a href='view_confirm_payment.php?confirm=$id&email=$email'>Confirm</a></td>";
      echo "<td><a href='view_confirm_payment.php?unconfirm=$id'>Not Confirm</a></td>";
      echo "</tr>";
    }


    ?>

  </tbody>
</table>
<?php 


if (isset($_GET['confirm'])) {
  $the_confirm_id = escape($_GET['confirm']);
  $the_confirm_email = escape($_GET['email']);
  echo "$the_confirm_email";
  $query = "UPDATE confirm_payment SET status = 'confirmed' WHERE id = $the_confirm_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
              $to = "$the_confirm_email";
              $subject = "Thank you";
              // To send HTML mail, the Content-type header must be set
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

              // Create email headers
              $headers .= 'From: ' . 'support@fikirlaw.com' . "\r\n" .
                'Reply-To: ' . 'support@fikirlaw.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

              // Compose a simple HTML email message
              $message = "<h1>Your payment is confirmed thank you!</h1>";

              if (mail($to, $subject, $message, $headers)) {
                echo ("<script> alert('email sent successfully');</script>");
              } else {
                 echo ("<script> alert('email not sent');</script>");
              }
  
  header("Location: ./view_confirm_payment.php");
}

if (isset($_GET['unconfirm'])) {
  $the_confirm_id = escape($_GET['unconfirm']);
  $query = "UPDATE confirm_payment SET status = 'not confirmed' WHERE id = $the_confirm_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
  
  header("Location: ./view_confirm_payment.php");
}

?>



