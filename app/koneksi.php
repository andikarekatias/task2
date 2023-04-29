<?php 
    class Koneksi {
        public $kon;
        private $username;
        private $password;
        public $baseUrl;
        public $dashboardUrl;
        public $prosesUrl;
        public $incUrl;

        function __construct()
        {
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $this->kon = mysqli_connect("localhost", "root", "") or die("Couldn't connect to MySQL server");
            mysqli_select_db($this->kon, "task2");
            $this->baseUrl = "http://" . $_SERVER['SERVER_NAME'] . "/task2";
            $this->dashboardUrl = $this->baseUrl."dashboard";
            $this->prosesUrl = $this->baseUrl . "proses/";
            $this->incUrl = $this->baseUrl . "inc";
        }

        public function login($username,$password){
            $query = mysqli_query($this->kon, "SELECT * FROM petugas WHERE username = '$username' AND password ='$password'");
            $row = mysqli_fetch_array($query);            
            if ($row['username'] == $username AND $row['password'] == $password){
                if($row['level'] == 'admin'){
                    session_start();
                    $_SESSION['id_petugas'] = $row['id_petugas'];
                    $_SESSION['username'] = $row['username'];                    
                    $_SESSION['level'] = $row['level'];
                    header("Location: $this->dashboardUrl");
                }elseif($row['level'] == 'petugas'){
                    session_start();
                    $_SESSION['id_petugas'] = $row['id_petugas'];
                    $_SESSION['username'] = $row['username'];                    
                    $_SESSION['level'] = $row['level'];
                    header("Location: $this->dashboardUrl?url=history");
                }else{
                    session_start();
                    $_SESSION['msg'] = 'Level user not valid';    
                }
            }else{
                session_start();
                $query2 = mysqli_query($this->kon, "SELECT * FROM siswa WHERE username = '$username' AND password ='$password'");
                $row2 = mysqli_fetch_array($query2); 
                if ($row2['username'] == $username AND $row2['password'] == $password){
                    $_SESSION['nisn'] = $row2['nisn'];
                    $_SESSION['username'] = $row2['username'];                    
                    header("Location: $this->dashboardUrl?url=history");
                }else{
                    $_SESSION['msg'] = 'Username or password is invalid !!';
                    header("Location: $this->baseUrl");
                }                
            }
        }
    }
?>