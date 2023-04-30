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
        <?php 
          if(isset($_SESSION['username']) && !empty($_SESSION['username'])){          
            ?>     
            <li class="nav-item">
              <a class="nav-link" href="?url=cart"><i class="fas fa-shopping-cart"></i></a>
            </li>       
            <li class="nav-item">
              <a class="nav-link" href="?url=profile"><i class="far fa-user"></i> <?=$_SESSION['username']?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $prosesUrl ?>logout.php">Logout</a>
            </li>
            <?php
        }else{
          ?><li class="nav-item">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Register
            </button>
        </li><?php  
        }
        ?>       
    </ul>
  </div>
</nav>
<?php require_once('modal.php'); ?>