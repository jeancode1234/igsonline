<?php
   include("authentification.php");
    include("connexion.php");
   if (isset($_POST['update_user'])) {
      $user_id = $_POST['user_id'];
      $nom = $_POST['nom'];
      $email = $_POST['email'];
      $adresse = $_POST['adresse'];
      $phone = $_POST['telephone'];
      $password =  md5($_POST['password']);
      $role = $_POST['role_as'];
      $status = $_POST['status'] == true ? '1':'0';

      $query=$connect->query("UPDATE user SET nom='$nom', email='$email', adresse='$adresse', telephone='$phone',password='$password',
      role_as='$role', status='$status' WHERE client_id='$user_id'");

      if ($query) {
          $_SESSION['message'] ="mise à jour reussie";
          header("Location: adminindex.php");
          exit(0);
      }
   }
?>