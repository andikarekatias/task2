<?php 
require_once('koneksi.php');
class User{
    public $koneksi;
    private $id_user;
    private $username;
    private $password;
    private $role;
    public $baseUrl;
    public $prosesUrl;
    public $pu;
    public function __construct(){
        $kon = new Koneksi();
        $this->koneksi = $kon->kon;
        $this->baseUrl = $kon->baseUrl; 
        $this->prosesUrl = $kon->prosesUrl;
        $this->pu = mysqli_query($this->koneksi, "SELECT * FROM user");  
    }

    public function addUser($username, $password, $role){
        $query = mysqli_query($this->koneksi,"SELECT * FROM user WHERE username = '$username'") or die("Error");
        $result = mysqli_fetch_array($query);
        if($result['username'] == $username){
            session_start();
            $_SESSION['msg'] = "Username already exist !!!";
            header("Location: $this->baseUrl");            
        }else{            
            $this->username = $username;
            $this->password = $password;                        
            $this->role = $role;            
            mysqli_query($this->koneksi,"INSERT INTO user (username,password,role) VALUES ('$this->username','$this->password','$this->role')");
            session_start();
            $_SESSION['msg'] = "Register success, Please Login";
            header("Location: $this->baseUrl");
        }

    }
}

?>