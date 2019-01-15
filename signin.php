<?php
$mysqli=new mysqli("localhost", "root", "", "log");
if($mysqli->connect_errno){
    echo "Echec lors de la connexion à MySQL:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}
$mysqli->query("
CREATE TABLE IF NOT EXISTS usmirlitoner (
id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
userame VARCHAR(15) NOT NULL,
password VARCHAR(15) NOT NULL); 
");
if(isset($_POST["identification"]) && isset($_POST["psd"])){
    $identification=$_POST["identification"];
    $psd=$_POST["psd"];
    $psdconf=$_psdconf["psdconf"];
//Séparation...//
$conn = new mysqli("localhost", "identification", "psd");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}