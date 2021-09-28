<?php include './includes/admin_header.php'; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include './includes/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include './includes/topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Clients</h1>

          </div>
          <!-- Content Row -->
          <div class="row">
            <?php
              if(isset($_GET['source'])){
                $source = $_GET['source'];
                
              }else{
                $source = '';
              }
              switch($source){
                case 'add_client':
                  include "./includes/add_client.php";
                  break;
                case 'edit_client':
                  include "./includes/edit_client.php";
                  break;
                default:
                  include "./includes/view_all_clients.php";
                  break;
              }
            
            
            ?>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php include './includes/admin_footer.php'; ?>