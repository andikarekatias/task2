<?php 
    class Koneksi {
        public $kon;
        private $username;
        private $password;
        private $role;
        public $baseUrl;
        public $dashboardUrl;
        public $prosesUrl;
        public $incUrl;

        function __construct()
        {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $this->kon = mysqli_connect("localhost", "root", "") or die("Couldn't connect to MySQL server");
            mysqli_select_db($this->kon, "task2");
            $this->baseUrl = "http://" . $_SERVER['SERVER_NAME'] . "/task2/";
            $this->dashboardUrl = $this->baseUrl."dashboard";
            $this->prosesUrl = $this->baseUrl . "proses/";
            $this->incUrl = $this->baseUrl . "inc";
        }

        public function login($username,$password){
            $query = mysqli_query($this->kon, "SELECT * FROM user WHERE username = '$username' AND password ='$password'");
            $row = mysqli_fetch_array($query);            
            if ($row['username'] == $username AND $row['password'] == $password){
                if($row['role'] == 'admin'){
                    session_start();
                    $_SESSION['id_user'] = $row['id_user'];
                    $_SESSION['username'] = $row['username'];                    
                    $_SESSION['role'] = $row['role'];
                    header("Location: $this->baseUrl");                
                }else{
                    session_start();
                    $_SESSION['id_user'] = $row['id_user'];
                    $_SESSION['username'] = $row['username'];                    
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['msg'] = 'Welcome '.$_SESSION['username']; 
                    header("Location: $this->baseUrl");   
                }
            }else{
                session_start();                
                $_SESSION['msg'] = 'Username or password is invalid !!';
                header("Location: $this->baseUrl");
                               
            }
        }
    }
?>