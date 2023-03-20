<?php
session_start();
include("connexion.php");
   if (!isset($_SESSION['auth'])) {
        
    $_SESSION['message'] = "connexion au tableau de bord impossible";

    header("Location: login.php");
    exit(0);
   }else {
      if ($_SESSION['auth_role'] != "1") {
         $_SESSION['message'] = "Vous n'etes pas administrateur";
         header("Location: login.php");
         exit(0);
      }
   }
?>