<?php 
    // connection à la base de données
    session_start();                     
    $adressIP="localhost:3306";
    $dbName="testbd";
    $username="root";
    $password="";
    $connect= mysqli_connect($adressIP,$username,$password,$dbName);
    if(!$connect){
        die("connection impossible".mysql_error());
    }
    

    $nom=$_GET["firstName"];
    $prenom=$_GET["lastName"];

    $requette= "INSERT INTO utilisateurs(firstName,lastName) VALUES('$nom','$prenom')";
    $test=mysqli_query($connect,$requette);
    if(!$test){
        die("requette impossible");
    }
    header("localhost/project1/app.php");

    
    
    

    


   
  









?>
