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
        <?php
        if (isset($_POST['submit'])) {
          $search = $_POST['search'];

          $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
          $search_result = mysqli_query($connection, $query);

          if (!$search_result) {
            die("Query Failed" . mysqli_error($connection));
          }
          $count = mysqli_num_rows($search_result);

          if ($count == 0) {
            echo "<div class='single-blog'>";
            echo "<h1> No result</h1>";
            echo "</div>";
          } else {

            while ($row = mysqli_fetch_assoc($search_result)) {
              $post_id = $row['post_id'];
              $post_title = $row['post_title'];
              $post_date = $row['post_date'];
              $post_content = substr($row['post_content'],0,157);
              $post_image = $row['post_image'];
              $post_duration = $row['post_duration']
        ?>
              <div class="single-blog">
                <img src="./post_img/<?php echo $post_image; ?>" alt="blog desc" class="blog-img" />
                <div class="blog-content">
                  <h2 class="blog-content-title">
                    <?php echo $post_title; ?>
                  </h2>

                  <p class="blog-text">
                    <?php echo $post_content; ?>
                  </p>
                  <a href="./singleBlog.php?post_id=<?php echo $post_id ?>">Continue Reading
                    <img src="./img/right-arrow.svg" alt="" />
                  </a>
                  <hr />

                  <div class="blog-footer">
                    <div class="blog-time">
                      <img src="./img/clock.svg" alt="" />
                      <p><?php echo $post_date; ?></p>
                    </div>

                    <div class="blog-duration"><?php echo $post_duration; ?></div>
                  </div>
                </div>
              </div>

        <?php
            }
          }
        }
        ?>

      </main>
      <aside class="col-md-2">
        <?php

        ?>

        <form action="" method="post">

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