<?php include './includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
  <title>Proclamations</title>
</head>

<body>
  <header class="blog-header" id="header"></header>



  <section class="blog">
    <div class="blog-div">
      <div class="container header-pro">
      <h2 class="blog-title ">All Procalamations</h2>
      <select class="selection btn" name="" id="search-select">
        <option value="2013" >2013</option>
        <option value="2012">2012</option>
        <option  value="2011">2011</option>
        <option  value="2010">2010</option>
        <option  value="2009">2009</option>
        <option  value="2008">2008</option>
        <option value="2007">2007</option>
        <option   value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option  value="2000">2000</option>
      </select>
      </div>
    
    </div>



    <div class="container row">
      <main class="blog-container dropdown-content-bond font-amh col-md-7 col-lg-6 col-xl-8">
    <?php include './includes/proclamations.php'; ?>
      </main>
   
      <div class="fixed1">
        <aside class="col-md-2">
          <form action="search.php" method="post">
            <div class="input-container">
              <button type="submit" name="submit" class="search-button"><img src="./img/search.svg" class="icon" alt="" /></button>
              <input class="input-field" type="search" placeholder="Search..." name="search" />
            </div>
          </form>
          <h2>Recent</h2>
          <div class="recent-blog">
            <img src="./img/family1.jpg" alt="" />
            <div class="recent-inner">
              <h3 class="recent-blog-title">Other Blog Title</h3>
              <p>May, 27th 2021</p>
            </div>
          </div>
          <div class="recent-blog">
            <img src="./img/contrat.png" alt="" />
            <div class="recent-inner">
              <h3 class="recent-blog-title">Other Blog Title</h3>
              <p>May, 27th 2021</p>
            </div>
          </div>
          <div class="recent-blog">
            <img src="./post_img/blogpic3.jpg" alt="" />
            <div class="recent-inner">
              <h3 class="recent-blog-title">Other Blog Title</h3>
              <p>May, 27th 2021</p>
            </div>
          </div>
          <div class="recent-blog">
            <img src="./img/employee.jpg" alt="" />
            <div class="recent-inner">
              <h3 class="recent-blog-title">Other Blog Title</h3>
              <p>May, 27th 2021</p>
            </div>
          </div>

          <h3 class="blog-category">Category</h3>

          <?php include './includes/sidebar.php'; ?>
        </aside>
      </div>

    </div>
  </section>

  <footer id="footer"></footer>
  <script>
 
//  $('#select_box').change(function () {
//  var select=$(this).find(':selected').val();        
//   $(".hide").hide();
//   $('#' + select).show();
 
//        }).change();
     </script>
  <script src="./js/blog.js" type="module"></script>

</body>

</html>