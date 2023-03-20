<?php
session_start();
   include("connexion.php");
    
   if (isset($_POST['submit'])) {
       
       $email = htmlspecialchars($_POST['email']);
       $password = md5($_POST['password']);

       $login= $connect->query("SELECT * FROM user WHERE email='$email' AND password='$password'");

       if ($login->rowCount()>0) {

          foreach ($login as $data) {
            $user_id = $data['client_id'];
            $user_name = $data['nom'];
            $user_email =$data['email'];
            $role_as =$data['role_as'];
          }


          $_SESSION['auth']=true;
          $_SESSION['auth_role']="$role_as";//1 pour l'admin et 0 pour le user
          $_SESSION['auth_user'] =[
             'user_id'=>$user_id,
             'user_name'=>$user_name,
             'user_email'=>$user_email,
          ];

          if ( $_SESSION['auth_role']=="1") {
            $_SESSION["message"] = "Bienvenue au tableau de bord"." ".$_SESSION['auth_user']['user_name'];
            header("Location: adminindex.php");
            exit(0);
          }else if ($_SESSION['auth_role']=="0") {
            $_SESSION["message"] = "Bienvenue sur notre plateform";
            header("Location: index.php");
            exit(0);
          }
       }else {
        $_SESSION["message"] = "Email ou mot de pass invalide";
        header("Location:login.php");
        exit(0);
       }

   }else {
    $_SESSION["message"] = "impossible d'avoir accès";
    header("Location: login.php");
    exit(0);
   }
?>