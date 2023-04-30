<?php include_once('inc/auth.php') ?>
<?php include_once('inc/header.php') ?>
<?php include_once('inc/navbar.php') ?>
<div class="container" style="margin-top:70px;">    
    <?php 
        if (isset($_SESSION["msg"]) && !empty($_SESSION["msg"])) {
          $msg = $_SESSION["msg"];
          echo "<div class='alert alert-warning'>";
          echo "<strong>Notice!</strong> " . $msg . "</h2>";
          echo "</div>";
          unset($_SESSION['msg']);
          }
      ?>        
</div>
<div class="container my-4">
    <?php include_once('inc/content.php') ?>
</div>
<?php include_once('inc/footer.php') ?>