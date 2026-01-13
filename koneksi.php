<?php
date_default_timezone_set('Asia/Jakarta');

$username = "root";
$password = "";
$db = "webdailyjournal";

//create connection
$conn = new mysqli("localhost:3308", "root", "", "webdailyjournal");

//check apakah ada error connection
if($conn->connect_error){
	//jika ada, hentikan script dan tampilkan pesan error
	die("Connection failed : ".$conn->connect_error);
}
?>