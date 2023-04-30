<h1 class="display-4">Profile <small><?=$_SESSION['username']?></small></h1> 
<?php 
    if (isset($_SESSION["msg"]) && !empty($_SESSION["msg"])) {
        $msg = $_SESSION["msg"];
        echo "<div class='alert alert-warning'>";
        echo "<strong>Notice!</strong> " . $msg . "</h2>";
        echo "</div>";
        unset($_SESSION['msg']);
    }
$id_u = $_SESSION['id_user'];
$check = mysqli_query($buyer->koneksi, "SELECT * FROM buyers WHERE id_u = '$id_u'");
if (mysqli_num_rows($check) > 0) {
    $query =  mysqli_query($buyer->koneksi,"SELECT * FROM buyers WHERE id_u = '$id_u'");
    $result = mysqli_fetch_array($query);    
    ?>
    <p><span class="plabel">Name</span>: <?php echo $result['name']; ?></p>
    <p><span class="plabel">Email</span>: <?php echo $result['email']; ?></p>
    <p><span class="plabel">Address</span>: <?php echo $result['address']; ?></p>
    <p><span class="plabel">City</span>: <?php echo $result['city']; ?></p>
    <p><span class="plabel">State</span>: <?php echo $result['state']; ?></p>
    <p><span class="plabel">ZIP</span>: <?php echo $result['zip']; ?></p>
    <p><span class="plabel">Credit Card</span>: <?php echo $result['cc']; ?></p>
    <p><span class="plabel">Expired Month</span>: <?php echo $result['month_exp']; ?></p>
    <p><span class="plabel">Expired Year</span>: <?php echo $result['year_exp']; ?></p>
    <?php
}else{
    ?>
    <form action="proses/profile.php" method="POST">
        <input type="hidden" id="id_u" name="id_u" value="<?= $_SESSION['id_user'] ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" id="state" name="state" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip">
            </div>
        </div>
        <div class="form-group">
            <label for="cc">Credit Card Number</label>
            <input type="text" class="form-control" id="cc" name="cc">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="month_exp">Expiration Month</label>
                <input type="text" id="month_exp" name="month_exp" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="year_exp">Expiration Year</label>
                <input type="text" id="year_exp" name="year_exp" class="form-control">
            </div>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
}
?>