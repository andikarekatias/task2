<?php 
session_start();
require_once('app/koneksi.php');
$kon = new Koneksi();
$baseUrl = $kon->baseUrl;

?>