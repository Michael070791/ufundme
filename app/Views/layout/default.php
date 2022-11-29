<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection("title") ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <!-- STYLES -->
    <link type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">

     <!--fonts-->
     <link href="<?php echo base_url();?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/solid.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/brands.css" rel="stylesheet">
     <link href="<?php echo base_url();?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
     

<!-- Latest compiled and minified JavaScript -->
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <svg width="142" role="" arial-label="" height="24" viewBox="0 0 142 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.127 1.58398V15.4414C18.127 16.916 17.7998 18.249 17.1455 19.4404C16.501 20.6221 15.5195 21.5596 14.2012 22.2529C12.8926 22.9463 11.2422 23.293 9.25 23.293C6.41797 23.293 4.25977 22.5703 2.77539 21.125C1.29102 19.6797 0.548828 17.7656 0.548828 15.3828V1.58398H5.0752V14.6943C5.0752 16.4619 5.43652 17.7021 6.15918 18.415C6.88184 19.1279 7.95117 19.4844 9.36719 19.4844C10.3633 19.4844 11.1689 19.3135 11.7842 18.9717C12.4092 18.6299 12.8682 18.1025 13.1611 17.3896C13.4541 16.6768 13.6006 15.7686 13.6006 14.665V1.58398H18.127ZM27.8389 23H23.3711V1.58398H35.6465V5.30469H27.8389V10.8271H35.1045V14.5332H27.8389V23ZM54.5137 6.62305V23H51.0859L50.4854 20.9053H50.251C49.8994 21.4619 49.46 21.916 48.9326 22.2676C48.4053 22.6191 47.8242 22.8779 47.1895 23.0439C46.5547 23.21 45.8955 23.293 45.2119 23.293C44.04 23.293 43.0195 23.0879 42.1504 22.6777C41.2812 22.2578 40.6025 21.6084 40.1143 20.7295C39.6357 19.8506 39.3965 18.708 39.3965 17.3018V6.62305H43.8643V16.1885C43.8643 17.3604 44.0742 18.2441 44.4941 18.8398C44.9141 19.4355 45.583 19.7334 46.501 19.7334C47.4092 19.7334 48.1221 19.5283 48.6396 19.1182C49.1572 18.6982 49.5186 18.0879 49.7236 17.2871C49.9385 16.4766 50.0459 15.4902 50.0459 14.3281V6.62305H54.5137ZM68.5029 6.31543C70.251 6.31543 71.6572 6.79395 72.7217 7.75098C73.7861 8.69824 74.3184 10.2217 74.3184 12.3213V23H69.8506V13.4346C69.8506 12.2627 69.6357 11.3789 69.2061 10.7832C68.7861 10.1875 68.1221 9.88965 67.2139 9.88965C65.8467 9.88965 64.9141 10.3535 64.416 11.2812C63.918 12.209 63.6689 13.5469 63.6689 15.2949V23H59.2012V6.62305H62.6143L63.2148 8.71777H63.4639C63.8154 8.15137 64.25 7.69238 64.7676 7.34082C65.2949 6.98926 65.876 6.73047 66.5107 6.56445C67.1553 6.39844 67.8193 6.31543 68.5029 6.31543ZM84.1035 23.293C82.2773 23.293 80.7881 22.5801 79.6357 21.1543C78.4932 19.7188 77.9219 17.6143 77.9219 14.8408C77.9219 12.0381 78.5029 9.91895 79.665 8.4834C80.8271 7.03809 82.3457 6.31543 84.2207 6.31543C85.002 6.31543 85.6904 6.42285 86.2861 6.6377C86.8818 6.85254 87.3945 7.14062 87.8242 7.50195C88.2637 7.86328 88.6348 8.26855 88.9375 8.71777H89.084C89.0254 8.40527 88.9521 7.94629 88.8643 7.34082C88.7861 6.72559 88.7471 6.0957 88.7471 5.45117V0.207031H93.2295V23H89.8018L88.9375 20.876H88.7471C88.4639 21.3252 88.1074 21.7354 87.6777 22.1064C87.2578 22.4678 86.7549 22.7559 86.1689 22.9707C85.583 23.1855 84.8945 23.293 84.1035 23.293ZM85.6709 19.7334C86.8916 19.7334 87.751 19.3721 88.249 18.6494C88.7568 17.917 89.0254 16.8184 89.0547 15.3535V14.8701C89.0547 13.2783 88.8105 12.0625 88.3223 11.2227C87.834 10.373 86.9258 9.94824 85.5977 9.94824C84.6113 9.94824 83.8398 10.373 83.2832 11.2227C82.7266 12.0723 82.4482 13.2979 82.4482 14.8994C82.4482 16.501 82.7266 17.707 83.2832 18.5176C83.8496 19.3281 84.6455 19.7334 85.6709 19.7334ZM117.136 6.31543C118.991 6.31543 120.393 6.79395 121.34 7.75098C122.297 8.69824 122.775 10.2217 122.775 12.3213V23H118.293V13.4346C118.293 12.2627 118.093 11.3789 117.692 10.7832C117.292 10.1875 116.672 9.88965 115.832 9.88965C114.65 9.88965 113.811 10.3145 113.312 11.1641C112.814 12.0039 112.565 13.21 112.565 14.7822V23H108.098V13.4346C108.098 12.6533 108.01 11.999 107.834 11.4717C107.658 10.9443 107.39 10.5488 107.028 10.2852C106.667 10.0215 106.203 9.88965 105.637 9.88965C104.807 9.88965 104.152 10.0996 103.674 10.5195C103.205 10.9297 102.868 11.54 102.663 12.3506C102.468 13.1514 102.37 14.1328 102.37 15.2949V23H97.9023V6.62305H101.315L101.916 8.71777H102.165C102.497 8.15137 102.912 7.69238 103.41 7.34082C103.918 6.98926 104.475 6.73047 105.08 6.56445C105.686 6.39844 106.301 6.31543 106.926 6.31543C108.127 6.31543 109.143 6.51074 109.973 6.90137C110.812 7.29199 111.457 7.89746 111.906 8.71777H112.302C112.79 7.87793 113.479 7.26758 114.367 6.88672C115.266 6.50586 116.188 6.31543 117.136 6.31543ZM134.128 6.31543C135.642 6.31543 136.945 6.6084 138.039 7.19434C139.133 7.77051 139.978 8.61035 140.573 9.71387C141.169 10.8174 141.467 12.165 141.467 13.7568V15.9248H130.905C130.954 17.1846 131.33 18.1758 132.033 18.8984C132.746 19.6113 133.732 19.9678 134.992 19.9678C136.037 19.9678 136.994 19.8604 137.863 19.6455C138.732 19.4307 139.626 19.1084 140.544 18.6787V22.1357C139.733 22.5361 138.884 22.8291 137.995 23.0146C137.116 23.2002 136.047 23.293 134.787 23.293C133.146 23.293 131.691 22.9902 130.422 22.3848C129.162 21.7793 128.171 20.8564 127.448 19.6162C126.735 18.376 126.379 16.8135 126.379 14.9287C126.379 13.0146 126.701 11.4229 127.346 10.1533C128 8.87402 128.908 7.91699 130.07 7.28223C131.232 6.6377 132.585 6.31543 134.128 6.31543ZM134.157 9.49414C133.288 9.49414 132.565 9.77246 131.989 10.3291C131.423 10.8857 131.096 11.7598 131.008 12.9512H137.277C137.268 12.2871 137.146 11.6963 136.911 11.1787C136.687 10.6611 136.345 10.251 135.886 9.94824C135.437 9.64551 134.86 9.49414 134.157 9.49414Z" fill="#3E97FF"/>
                </svg>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarSupportedContent">
      <ul class="nav justify-content-center">
            <li class="nav-item active"><a class="nav-link" href="/"><i class="fa-sharp fa-solid fa-house"></i> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-circle-info"></i> How it works</a>
            </li>
            <?php $email = session()->get('email');
                  if(!empty($email)):?>
                    <li class="nav-item" onclick="openNav()"><a class="nav-link" href="#" ><i class="fa-sharp fa-solid fa-circle-user"></i>Hi, <?= session()->get('first_name') ?></a></li>
                  <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login')?>"><i class="fa-sharp fa-solid fa-right-to-bracket"></i> Sign in</a></li>
            <?php endif;?>
            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('create')?>" ><i class="fa-sharp fa-solid fa-hand-holding-dollar"></i> Start a UFundme</a>
      </ul>
    </div>
  </div>
</nav>


<!-- CONTENT -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a>
    <figure>
      <img class="thumbnail" id="avatar" src="<?php echo base_url('assets/images/User.png')?>"/>
      <figcaption>
        <a href="#"><?= session()->get('last_name')?> <?= session()->get('first_name')?></a>
      </figcaption>
    </figure>
  </a>
  <a class="nav-link" href="<?php echo base_url('funds')?>">Your Fundraise</a>
  <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-gear"></i> Settings</a>
  <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-wallet"></i> Wallet</a>
  <a class="nav-link" href="<?php echo base_url('logout')?>"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Logout</a>
</div>

<section class="container fluid">

<?= $this->renderSection("body") ?>

<div class="row g-3">
  
    <?php if(!empty($fundraisers)):?>
      <h3>Fundraisers in your community</h3>
        <?php foreach ($fundraisers as $item):?>
          <div class="col-sm-4">
            <div id="fund-card" class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text"><?= $item['cause']?></p>
                <p class="card-text badge-">Target <span class="badge text-bg-success">UFC<?= $item['target_amount']?></span></p>
                <a href="#" class="btn btn-outline-primary btn-sm">Details</a>
              </div>
            </div>
          </div>
        <?php endforeach;?>
    <?php endif;?>
  
</div>

</section>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>

    <div class="copyrights">

       <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <p>&copy; <?= date('Y') ?> ufundme, all rights reserved</p>
        </div>
        <div class="col-lg-4">
          <span class="glyphicon glyphicon-asterisk"></span><a href="#">Terms and conditions</a> | 
          <span class="glyphicon glyphicon-asterisk"></span><a href="#">Privacy Policy</a>
        </div>
       </div>

    </div>

</footer>

<!-- SCRIPTS -->
<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/javascript.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap/js/bootstrap.bundle.js"></script>
<link href="<?php echo base_url();?>/assets/fontawesome/js/fontawesome.js" rel="stylesheet">
<link href="<?php echo base_url();?>/assets/fontawesome/js/fontawesome.min.js" rel="stylesheet">
<link href="<?php echo base_url();?>/assets/fontawesome/js/fontawesome.regular.js" rel="stylesheet">
<!-- -->

</body>
</html>
