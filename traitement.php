<?php
$mysqli=new mysqli("localhost", "root", "", "log");
if($mysqli->connect_errno){
    echo "Echec lors de la connexion à MySQL:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}
$mysqli->query("
CREATE TABLE IF NOT EXISTS mirliton (
id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(15) NOT NULL,
password VARCHAR(15) NOT NULL); 
");
if(isset($_POST["identifiant"]) && isset($_POST["password"])){
    $identifiant=$_POST["identifiant"];
    $mdp=$_POST["password"];

    $res=$mysqli->query("SELECT password from mirliton where username = '" .$identifiant. "' ");

    /** */
    if($res != false){
    
    $res=$res->fetch_assoc();

    if($res["password"]==$mdp){
        require("connection.php");
    }
    else{
        echo "<h2 style='color: red; '>Couple pseudo/mdp incorrect<h2/>";
        require("inscription.html");
    }
    }
    else {
        echo "<h2 style='color: red; '>Ce pseudo n'existe pas<h2/>";
        require("inscription.html");
    }
}