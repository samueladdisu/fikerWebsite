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

          if (isset($_POST['confirm'])) {
            $confirm_name = $_POST['confirm_name'];
            $confirm_email = $_POST['confirm_email'];
            $confirm_ref_number = $_POST['confirm_ref_number'];

            $query = "INSERT INTO confirm_payment (name, email, ref_number, date) ";
            $query .= "VALUES ('$confirm_name', '$confirm_email','$confirm_ref_number',now())";

            $confirm_result = mysqli_query($connection,$query);
            if (!$confirm_result) {
              die('QUERY FAILED ' . mysqli_error($connection));
            }
          }



          ?>

          <form action="" method="POST" class="myform">
            <h2>Confirm Payment</h2>
            <input type="text" name="confirm_name" id="" placeholder="Name" />
            <input type="email" name="confirm_email" id="" placeholder="Same Email with previous one" />

            <input type="text" name="confirm_ref_number" placeholder="Bank Reference Number" />

            <button type="submit" name="confirm" class="btn btn-outline-secondary">
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