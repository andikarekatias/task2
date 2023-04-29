<?php include_once('inc/auth.php') ?>
<?php include_once('inc/header.php') ?>
<?php include_once('inc/navbar.php') ?>
<div class="container" style="margin-top:70px;">
    <h1 class="display-4">Products</h1>
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
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/300x200.png" alt="Product Image">
					<div class="card-body">
						<h5 class="card-title">Product Name</h5>
						<p class="card-text">Product Description</p>
						<p class="card-text font-weight-bold">$100.00</p>
						<a href="#" class="btn btn-primary">Add to Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/300x200.png" alt="Product Image">
					<div class="card-body">
						<h5 class="card-title">Product Name</h5>
						<p class="card-text">Product Description</p>
						<p class="card-text font-weight-bold">$100.00</p>
						<a href="#" class="btn btn-primary">Add to Cart</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="https://via.placeholder.com/300x200.png" alt="Product Image">
					<div class="card-body">
						<h5 class="card-title">Product Name</h5>
						<p class="card-text">Product Description</p>
						<p class="card-text font-weight-bold">$100.00</p>
						<a href="#" class="btn btn-primary">Add to Cart</a>
					</div>
				</div>
			</div>            
		</div>
	</div>
<?php include_once('inc/footer.php') ?>