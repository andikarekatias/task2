<?php 
require_once('koneksi.php');
class Item{
    public $koneksi;
    private $id_i;
    private $id_user;
    private $i_name;
    private $type;
    private $image;
    private $price;
    public $baseUrl;
    public $prosesUrl;
    public $pi;
    public function __construct(){
        $kon = new Koneksi();
        $this->koneksi = $kon->kon;
        $this->baseUrl = $kon->baseUrl; 
        $this->prosesUrl = $kon->prosesUrl;
        $this->pi = mysqli_query($this->koneksi, "SELECT * FROM item");  
    }

    public function showItem(){        
        while ($result = mysqli_fetch_array($this->pi)) {
            $this->id_i = $result['id_i'];            
            $this->i_name = $result['i_name'];
            $this->type = $result['type'];
            $this->image = $result['image'];
            $this->price = $result['price'];
            
            echo "<div class='col-md-4 my-1'>";
            echo "<div class='card'>";
			echo "<img class='card-img-top' src='" . $this->baseUrl . "assets/img/".$this->image."' alt='Product Image'>";
			echo "<div class='card-body'>";
			echo "<h5 class='card-title'>". $this->i_name ."</h5>";
            echo $this->id_user;
			echo "<p class='card-text'>". $this->type ."</p>";
			echo "<p class='card-text font-weight-bold'>Rp ". number_format($this->price,2) ."</p>";
            echo "<form method='post' action='" . $this->prosesUrl . "add_to_cart.php'>";
            echo "<input type='hidden' name='id_i' value='". $this->id_i ."'>";            
            echo "<input type='number' name='quantity' min='1' value='1' class='form-control my-1'>";
            echo "<button name='submit' type='submit' class='btn btn-primary'>Add to Cart</button>";
            echo "</form>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
            
        }
    }
}

?>