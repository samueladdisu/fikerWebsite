<?php ob_start(); ?>
<?php include  '../includes/db.php'; ?>
<?php session_start(); ?>

<?php 

    if(!isset($_SESSION['user_role'])) {
        header("Location: ./index.php");
    }



?>
<?php 

function confirm($result){

    global $connection;
    if(!$result){
        die('QUERY FAILED '. mysqli_error($connection));
      }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fiker Legal Service - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
