<?php
    require_once("../app/koneksi.php");
    $kon = new Koneksi();
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $kon->login($username, $password);

?>