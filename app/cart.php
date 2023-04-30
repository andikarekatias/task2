<?php 
require_once('koneksi.php');
class Cart{
    public $koneksi;
    private $id_c;
    private $id_i;
    private $id_user;
    private $id_u;
    private $quantity;
    private $cr;
    private $i_name;
    private $type;
    private $image;
    private $price;
    private $item;
    public $baseUrl;
    public $prosesUrl;
    public $pc;
    public $totalPrice;
    public function __construct(){
        $kon = new Koneksi();
        $this->koneksi = $kon->kon;
        $this->baseUrl = $kon->baseUrl; 
        $this->prosesUrl = $kon->prosesUrl;
        $this->pc = mysqli_query($this->koneksi, "SELECT * FROM cart");          
    }
    public function addToCart($id_i, $id_user, $quantity){
        $this->id_i = $id_i;
        $this->id_u = $id_user;
        $this->quantity = $quantity;
            
        mysqli_query($this->koneksi,"INSERT INTO cart (id_i,id_u,quantity) VALUES ('$this->id_i','$this->id_u','$this->quantity')");
        session_start();
        $_SESSION['msg'] = "Item add to cart successfully";
        header("Location: $this->baseUrl?url=cart");
    }

    public function showCart(){
        $query = mysqli_query($this->koneksi,"SELECT c.quantity, i.i_name, i.type, i.image, i.price 
        FROM cart c 
        JOIN item i ON c.id_i = i.id_i 
        JOIN user u ON c.id_u = u.id_user 
        WHERE u.id_user = '".$_SESSION['id_user']."'"); 
        $this->cr = array();
        while ($result = mysqli_fetch_array($query)) {
            $this->i_name = $result['i_name'];
            $this->type = $result['type'];
            $this->image = $result['image'];
            $this->price = $result['price'];
            $this->quantity = $result['quantity'];
            if (isset($this->cr[$this->i_name])) {
                $this->cr[$this->i_name]['quantity'] += $this->quantity;
            } else {
                $this->cr[$this->i_name] = array('quantity' => $this->quantity, 'type' => $this->type , 'image' => $this->image, 'price' => $this->price);
            }
            $this->totalPrice += $this->quantity * $this->price; 
          }
          $no = 1;          
          foreach($this->cr as $this->i_name => $this->item){
            $totalItem = $this->item['price'] * $this->item['quantity'];
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td><img class='img-fluid img-thumbnail' src=" . $this->baseUrl. "assets/img/" .$this->image . " alt=" . $this->i_name . " style='width:150px'></td>";
            echo "<td>" . $this->i_name . "</td>";
            echo "<td>" . $this->item['type'] . "</td>";
            echo "<td>" . $this->item['quantity'] . "</td>";
            echo "<td>Rp " . number_format($totalItem,2) . "</td>";
            echo "</tr>";            
          }       
    }
}
?>