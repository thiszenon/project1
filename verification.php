
<?php
    //include 'server.php';
    $adress="localhost:3306";
    $usernamedb="root";
    $passworddb="";
    $dbName="testbd";
    
    $connect=mysqli_connect($adress,$usernamedb,$passworddb,$dbName);
    if(!$connect){
        die("connexion à la base de données impossible".mysql_error());
    }

    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $result= "SELECT emails,password FROM utilisateurs ";
    $requette2= mysqli_query($connect,$result);
    if(mysqli_num_rows($requette2)==0){
        die("erreur de recuperation");
    }else{
        $users= mysqli_fetch_array($requette2);
        if( ($username== $users['emails']) && (MD5($password)==$users['password']) ){
            // l'utilisateur est reconnu
            echo($users['firstName']);
        }else{
            echo("erreur de connexion");
        }
    
    }



?>