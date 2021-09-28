<table class="table table-bordered table-hover col-12" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Role</th>
      <th>Change to Admin</th>
      <th>Change to Author</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $query = "SELECT * FROM users";
    $user_result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($user_result)) {
      $user_id = $row['user_id'];
      $user_name = $row['user_name'];
      $user_password = $row['user_password'];
      $user_firstname = $row['user_firstname'];
      $user_lastname = $row['user_lastname'];
      $user_email = $row['user_email'];
      $user_role = $row['user_role'];

      echo "<tr>";
      echo "<td>{$user_id}</td>";
      echo "<td>{$user_name}</td>";
      echo "<td>{$user_firstname}</td>";
      echo "<td>{$user_lastname}</td>";

      echo "<td>{$user_email}</td>";
      echo "<td>{$user_role}</td>";
      echo "<td><a href='users.php?admin=$user_id'>Admin</a></td>";
      echo "<td><a href='users.php?author=$user_id'>Author</a></td>";
      echo "<td><a href='users.php?source=edit_user&edit=$user_id'>Edit</a></td>";
      echo "<td><a href='users.php?delete=$user_id'>Delete</a></td>";
      echo "</tr>";
    }


    ?>

  </tbody>
</table>

<?php


if (isset($_GET['admin'])) {
  $the_user_id = $_GET['admin'];
  $query = "UPDATE users SET user_role = 'Admin' WHERE user_id = $the_user_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
  header("Location: ./users.php");
}

if (isset($_GET['author'])) {
  $the_user_id = $_GET['author'];
  $query = "UPDATE users SET user_role = 'Author' WHERE user_id = $the_user_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
  header("Location: ./users.php");
}

if (isset($_GET['delete'])) {
  $the_user_id = $_GET['delete'];
  $query = "DELETE FROM users WHERE user_id = $the_user_id";
  $result = mysqli_query($connection, $query);

  confirm($result);
  header("Location: ./users.php");
}
?>