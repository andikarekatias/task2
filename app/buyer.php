<?php 
require_once('koneksi.php');
class Buyer{
    public $koneksi;
    private $id_p;
    private $id_u;
    private $name;
    private $email;
    private $address;
    private $city;
    private $state;
    private $zip;
    private $cc;
    private $month_exp;
    private $year_exp;
    public $baseUrl;
    public $prosesUrl;
    public $pb;
    public function __construct(){
        $kon = new Koneksi();
        $this->koneksi = $kon->kon;
        $this->baseUrl = $kon->baseUrl; 
        $this->prosesUrl = $kon->prosesUrl;
        $this->pb = mysqli_query($this->koneksi, "SELECT * FROM buyers");  
    }

    public function addBuyer($id_u,$name,$email,$address,$city,$state,$zip,$cc,$month_exp,$year_exp){         
        $this->id_u = $id_u;
        $this->name = $name;                        
        $this->email = $email;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->cc = $cc;
        $this->month_exp = $month_exp;
        $this->year_exp = $year_exp;            
        mysqli_query($this->koneksi,"INSERT INTO buyers (id_u,name,email,address,city,state,zip,cc,month_exp,year_exp) VALUES ('$this->id_u','$this->name','$this->email','$this->address','$this->city','$this->state','$this->zip','$this->cc','$this->month_exp','$this->year_exp')");
        session_start();
        $_SESSION['msg'] = "Succes insert Profile";
        header("Location: $this->baseUrl?url=profile");    
    }
}

?>