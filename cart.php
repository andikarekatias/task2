<h1 class="display-4">Shooping Cart <small><?=$_SESSION['username']?></small></h1>
<?php 

if (mysqli_num_rows($cart->pc) > 0) {
        ?>
        <div class="container mt-4">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Image</th>
          <th>Item Name</th>
          <th>Type</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>
      </thead>      
      <tbody>
        <?php $cart->showCart(); ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="5" class="text-right">Total:</td>
          <td>Rp <?= number_format($cart->totalPrice,2) ?></td>
        </tr>
      </tfoot>
    </table>
    <a href="?url=cart&&po=1" class="btn btn-primary">Place Order</a>
    <a href="<?= $baseUrl ?>" class="btn btn-primary">Countinue Shopping</a>
  </div>
        <?php
} else {
    echo "<div class='alert alert-danger'>";
    echo "<strong>Notice! </strong>Your shopping cart is empty !!! <a href='" . $baseUrl . "'>Countinue Shopping</a>";
    echo "</div>";
}
 if (!empty(@$_GET['po'])) {
        switch (@$_GET['po']) {
            case '1':
                include'profile.php';
                break;                   
            default:
                echo "<h3>Halaman tidak ditemukan !!!</h3>";
                break;
        }
    unset($_GET['po']);
    }   
?>