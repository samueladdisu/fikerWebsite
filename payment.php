<?php include './includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Fiker Legal Service - Make Payment</title>
</head>

<body class="payment-body">
  <header class="home-header">
    <nav class="nav">
      <div class="container">
        <div class="nav-header">
          <div class="logo">
            <a href="./index.html">
              <img src="./img/fiker_logo.svg" alt="Fiker legal service Logo" />
            </a>
          </div>
          <div class="menu">
            <img src="./img/menu-white.svg" class="ham" alt="" />
          </div>
        </div>

        <div class="links-container">
          <ul class="nav-links">
            <li><a href="./about.html" class="scroll-link">About us</a></li>
            <li class="drop-down">
              <a href="#" class="scroll-link solution"> Practice Areas <span><img src="./img/dropdown.svg" class="down-icon"></span> </a>
              <ul class="drop-down-link">
                <li><a href="./tax.html">Tax Law</a></li>
                <li><a href="./ip.html">Intellectual Property</a></li>
              </ul>

            </li>
            <li>
              <a href="./careers.html" class="scroll-link">Careers</a>
            </li>
            <li><a href="./proclamation.php" class="scroll-link">Proclamation</a></li>
            <li><a href="./contact.html" class="scroll-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="payment">
      <div class="container">
        <div class="form-wrapper">

          <?php
          if (isset($_POST['make_payment'])) {
            $payment_name = $_POST['payment_name'];
            $payment_email = $_POST['payment_email'];
            $payment_phone = $_POST['payment_phone'];
            $payment_bank = $_POST['payment_bank'];
            $payment_crm = $_POST['payment_crm'];

            $query = "INSERT INTO payment (payment_name, payment_email, payment_phone, payment_bank, payment_crm, payment_date) ";
            $query .= "VALUES ('$payment_name', '$payment_email', '$payment_phone', '$payment_bank', '$payment_crm', now() )";
            $payment_result = mysqli_query($connection, $query);

            if (!$payment_result) {
              die('QUERY FAILED ' . mysqli_error($connection));
            }

            $client_query = "SELECT * FROM clients WHERE client_number = $payment_crm";
            $client_result = mysqli_query($connection, $client_query);

            if (!$client_result) {
              die('QUERY FAILED ' . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($client_result)) {
              $client_balance = $row['client_balance'];
              $client_email = $row['client_email'];


              $to = 'nardidumessa@gmail.com';
              $subject = "Email From Fikir legal service: Payment Details";
              // To send HTML mail, the Content-type header must be set
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

              // Create email headers
              $headers .= 'From: ' . 'samueladdisu7@gmail.com' . "\r\n" .
                'Reply-To: ' . 'samueladdisu7@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

              // Compose a simple HTML email message
              $message = '<html><body>';
              $message .= '<h1 style="font-size:28px;">Dear <strong>' .  $payment_name . '</strong></h1>';
              $message .= '<br> <br>';
              $message .= '<p style="font-size:18px;">Thank you for placing an order with Fikir Legal Service</p>';
              $message .= '<br>';
              $message .= '<p style="font-size:18px;">Please make Payment to the Bank account below to activate your service .</p>';
              $message .= '<br> <br>';
              $message .= '<p> Kind Regards, </p>';
              $message .= '<p> Fikir Mulugeta </p>';
              $message .= '<p> Managing Director </p>';
              $message .= '<hr>';
              $message .= '<h1 style="font-size:22px; font-weight: 600;">Payment Detail</h1>';
              $message .= '<p> Amount:' . $client_balance . ' Birr</p>';
              $message .= '<p> Bank:' . $payment_bank . '</p>';
              $message .= '<p> Fikir Mulugeta</p>';
              $message .= '<p> 1000147153914</p>';
              $message .= '<p> Aftre making payment please Use this link to confirm your payment :</p>';
              $message .= '<a href="http://localhost:8080/fikerWebsite/confirm_payment.php">http://localhost:8080/fikerWebsite/confirm_payment.php </a>';
              $message .= '</body></html>';

              if (mail($to, $subject, $message, $headers)) {
                echo ("Email sent successfully to $to");
              } else {
                echo ("Email sending failed...");
              }
            }
          }



          ?>



          <form action="" method="POST" class="myform">
            <h2>Place Your Order</h2>
            <input type="text" name="payment_name" id="" placeholder="Name" required />
            <input type="email" name="payment_email" id="" placeholder="Email" required />
            <input type="tel" name="payment_phone" id="" placeholder="Phone" required />
            <input type="text" name="payment_crm" placeholder="Client Account Number" required />
            <h3>Select Bank</h3>
            <select name="payment_bank" id="">
              <option value="CBE"> <span><img src="./img/CBElogo 1.png" alt=""> CBE</span> </option>
              <option value="Dashen Bank"><span><img src="./img/dashen 1.png" alt="">Dashen Bank</span></option>
              <option value="Hibret Bank"><img src="./img/Awash-bank 1.png" alt="">Awash Bank</option>
              <option value="Nib Bank"><img src="./img/abyssinia-bank-logo-removebg-preview 1.png" alt="">Nib Bank</option>
            </select>
            

            <button type="submit" name="make_payment" class="btn btn-outline-secondary">
              Submit
            </button>
          </form>
        </div>
      </div>
    </section>
  </header>


  <script src="./js/app.js" type="module"></script>
</body>

</html>