<?php
    // Serveur et recuperation de données

    //connexion à la base de données
    $adress="localhost:3306";
    $usernamedb="root";
    $passworddb="";
    $dbName="testbd";
    
    $connect=mysqli_connect($adress,$usernamedb,$passworddb,$dbName);
    if(!$connect){
        die("connexion à la base de données impossible".mysql_error());
    }
    // recuperaation de données soumis par l'utilisateur
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password1=$_POST['password'];
    $confPassword=$_POST['confPassword'];
    if($password1 !=$confPassword){
        die("les mot de passe ne conrespondent pas");
        
        //header("..//signup.php");
    }
    $password=MD5($password1);
    // insertion de données dans la BD
    $requette= "INSERT INTO utilisateurs (firstName,lastName,emails,password) VALUES('$firstName','$lastName','$email','$password')";

    $signup=mysqli_query($connect,$requette);
    if(!$signup){
        die("Inscription echouer");
        //header("..//signup.php");
    }
    // connection à la page et ouverture d'une session utilisateurs
    
    



    
    
    
    
    


   
  









?>
