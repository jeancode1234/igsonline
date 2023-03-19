<?php
 require_once('connexion.php');

 if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['adresse']) && !empty($_POST['telephone'])
 && !empty($_POST['password']) && !empty($_POST['c_password'])) {
       
       if (isset($_POST['password']) == isset($_POST['c_password'])) {
            $name = htmlspecialchars($_POST['nom']);
            $email= htmlspecialchars($_POST['email']);
            $adresse= htmlspecialchars($_POST['adresse']);
            $phone= htmlspecialchars($_POST['telephone']);
            $password = md5($_POST['password']);

            $trait = $connect->query(" SELECT email FROM user WHERE email ='$email'");
           
            if ($trait->rowCount()>0) {
                 $_SESSION["message"] ="cet email existe deja";
                 header("Location: register.php");
                 exit(0);
            }else {
                 
     
                  $req=$connect->prepare('INSERT INTO user(nom,email,adresse,telephone,password) VALUES(?,?,?,?,?)');
                  $req->execute(array($name,$email,$adresse,$phone,$password));
                  $req->closeCursor();
                  $_SESSION["message"] ="Inscription reussie";
                  header("location:login.php");
            }
             
        
       }else {
          $_SESSION["message"] ="mot de pass incorrect";
          header("Location: register.php");
          exit(0);
       }
 }else{
     $_SESSION["message"] ="Veuillez renseigner tous les champs";
     header("Location: register.php");
     exit(0);
     
 }
?>