<?php include './includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Proclamations</title>
</head>

<body>
  <header class="blog-header" id="header"></header>

  <section class="blog">
    <h2 class="blog-title">Recently Published</h2>
    <div class="container row">
      <main class="blog-container col-md-7 col-lg-6 col-xl-8">


        <?php include './includes/proclamations.php'; ?>
      </main>
      <aside class="col-md-2">


        <form action="search.php" method="post">

          <div class="input-container">
            <button type="submit" name="submit" class="search-button"><img src="./img/search.svg" class="icon" alt="" /></button>
            <input class="input-field" type="search" placeholder="Search..." name="search" />
          </div>
        </form>

        <h2>Recent</h2>

        <div class="recent-blog">
          <img src="./post_img/blogpic.jpg" alt="" />
          <div class="recent-inner">
            <h3 class="recent-blog-title">Other Blog Title</h3>
            <p>May, 27th 2021</p>
          </div>
        </div>

        <div class="recent-blog">
          <img src="./post_img/blogpic2.jpg" alt="" />
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
          <img src="./post_img/blogpic.jpg" alt="" />
          <div class="recent-inner">
            <h3 class="recent-blog-title">Other Blog Title</h3>
            <p>May, 27th 2021</p>
          </div>
        </div>

        <h3 class="blog-category">Category</h3>

        <?php include './includes/sidebar.php'; ?>
      </aside>
    </div>
  </section>

  <footer id="footer"></footer>
  <script src="./js/blog.js" type="module"></script>
</body>

</html>