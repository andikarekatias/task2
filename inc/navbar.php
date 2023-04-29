<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="<?= $baseUrl ?>">
    <img src="assets/img/logo.png" alt="logo" style="width:40px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="<?= $baseUrl ?>">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
        
        <li class="nav-item">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Register
            </button>
        </li>        
    </ul>
  </div>
</nav>
<?php require_once('modal.php'); ?>