<?php include './includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Blog</title>
</head>

<body>
  <header class="blog-header" id="header"></header>

  <section class="blog">
    <div class="container row">
      <main class="blog-container col-md-7 col-lg-6 col-xl-8">




        <div class="single-bloger">
          <?php

          if (isset($_GET['post_id'])) {
            $post_id = $_GET['post_id'];

            $query = "SELECT * FROM posts WHERE post_id = $post_id ";
            $single_result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($single_result)) {
              $post_title = $row['post_title'];
              $post_date = $row['post_date'];
              $post_content = $row['post_content'];
              $post_image = $row['post_image'];
              $post_duration = $row['post_duration'];
          ?>
              <img src="./post_img/<?php echo $post_image; ?>" alt="blog desc" class="bloger-img" />

              <div class="blog-content">
                <h2 class="blog-content-titler">
                  <?php echo $post_title; ?>
                </h2>

                <p class="blog-text texter">
                  <?php echo $post_content; ?>

                </p>


                <?php

                if (isset($_POST['create_comment'])) {
                  $comment_author = $_POST['comment_author'];
                  $comment_email = $_POST['comment_email'];
                  $comment_content = $_POST['comment_content'];

                  $comment_query  = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) VALUES ($post_id, '$comment_author', '$comment_email', '$comment_content', 'unapproved', now()); ";

                  $comment_result = mysqli_query($connection, $comment_query);

                  if (!$comment_result) {
                    die('QUERY FAILED ' . mysqli_error($connection));
                  }

                  $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = $post_id";
                  $update_comment_query = mysqli_query($connection, $query);
                  echo "<script> alert('Your Comment is Waiting approval');</script>";
                }

                ?>

                <form action="" class="myform" method="POST">
                  <h2>Leave a Comment</h2>

                  <input type="text" name="comment_author" id="" placeholder="Your Name" required />
                  <input type="email" name="comment_email" id="" placeholder="Your Email" required />
                  <input type="text" name="comment_content" class="textarea" placeholder="Your Comment" required />

                  <button type="submit" name="create_comment" class="btn btn-outline-primary">
                    Submit
                  </button>
                </form>

                <?php

                $query = "SELECT * FROM comments WHERE comment_post_id = $post_id AND comment_status = 'approved' ORDER BY comment_id DESC";
                $select_comment_query = mysqli_query($connection, $query);

                if (!$select_comment_query) {
                  die('QUERY FAILED ' . mysqli_error($connection));
                }

                while ($row = mysqli_fetch_assoc($select_comment_query)) {
                  $comment_date = $row['comment_date'];
                  $comment_content = $row['comment_content'];
                  $comment_author = $row['comment_author'];
                ?>
                  <div class="comment-section">
                    <div class="c_wrapper">

                      <img src="./img/avatar.svg" alt="" class="comment_img">
                      <div class="comment-content">
                        <h3 class="name"><?php echo $comment_author; ?> <div class="dot"></div> <small><?php echo $comment_date; ?> </small></h3>
                        <div class="comment-text">
                        <?php echo $comment_content; ?> 
                        </div>
                      </div>
                    </div>
                    <div class="comment-bottom"></div>
                  </div>

                <?php } ?>
              

              </div>


          <?php }
          } ?>

        </div>
      </main>




      <aside class="single-aside col-md-2">
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