<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- STYLES -->
      <link type="text/css" href="<?php echo base_url(); ?>/assets/css/admin-css.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">


     <!--fonts-->
     <link href="<?php echo base_url();?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/solid.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/brands.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
    
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class="fa-solid fa-box-dollar"></i>
      <span class="logo_name">UFundme</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class="fa-solid fa-gauge"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/users')?>">
          <i class="fa-solid fa-users"></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/funds')?>">
            <i class="fa-sharp fa-solid fa-coins"></i>
            <span class="links_name">Fundraisers</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fa-sharp fa-solid fa-hand-holding-dollar"></i>
            <span class="links_name">Donations</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fa-solid fa-chart-pie"></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-message"></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-gear"></i>
            <span class="links_name">Settings</span>
          </a>
        </li>
        <li class="log_out">
          <a href="<?php echo base_url('logout')?>">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='fa-solid fa-bars sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
      </div>
      <div class="profile-details">
        <i class="fa-solid fa-user"></i>
        <?php if(!empty(session()->email)):?>
        <span class="admin_name">Admin</span>
        <?php endif;?>
       
      </div>
    </nav>

    <div class="home-content">

      <?= $this->renderSection("body") ?>

    </div>
  </section>
  <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/dataTables/dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/dataTables/dataTables.bootstrap5.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/javascript.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap/js/bootstrap.bundle.js"></script>
<link href="<?php echo base_url();?>/assets/fontawesome/js/fontawesome.js" rel="stylesheet">
<link href="<?php echo base_url();?>/assets/fontawesome/js/fontawesome.min.js" rel="stylesheet">
<link href="<?php echo base_url();?>/assets/fontawesome/js/fontawesome.regular.js" rel="stylesheet">

</body>
</html>
