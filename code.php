<?php
   include("authentification.php");
    include("connexion.php");
     
     if (isset($_POST['delete_user'])) {
      $user=$_POST['delete_user'];

      $query = $connect->query("DELETE FROM user WHERE client_id ='$user'");
      if ($query) {
         if ($role =="1") {
            $_SESSION['message'] = "Administrateur supprimé";
            header("Location: adminindex.php");
            exit(0);
         }else {
            $_SESSION['message'] = "Utilisateur supprimé";
            header("Location: adminindex.php");
            exit(0);
         }
       
      }else {
            $_SESSION['message'] = "Erreur lors de suppression";
            header("Location: adminindex.php"); 
            exit(0);
      }
     }

    if (isset($_POST['add_user'])) 
    {
      if (!empty( $_POST['nom']) && !empty($_POST['email']) && !empty($_POST['adresse']) && !empty($_POST['telephone']) && !empty($_POST['password'])) {
         $nom = $_POST['nom'];
      $email = $_POST['email'];
      $adresse = $_POST['adresse'];
      $phone = $_POST['telephone'];
      $password =  md5($_POST['password']);
      $role = $_POST['role_as'];
      $status = $_POST['status'] == true ? '1':'0';

      $query = $connect->prepare("INSERT INTO user(nom,email,adresse,telephone,password,role_as,status) VALUES(?,?,?,?,?,?,?)");
      $query->execute(array($nom,$email,$adresse,$phone,$password,$role,$status));

      if ($query) {
         if ($role =="1") {
            $_SESSION['message'] = "Administrateur ajouté avec success";
            header("Location: adminindex.php");
            exit(0);
         }else {
            $_SESSION['message'] = "Utilisateur ajouté avec success";
            header("Location: adminindex.php");
            exit(0);
         }
       
      }else {
         $_SESSION['message'] = "Quelque chose s'est mal passée!";
        header("Location: adminindex.php");
        exit(0);
      }
      }else {
         $_SESSION['message'] = "Veuillez renseigné tous les champs";
        header("Location: adduser.php");
        exit(0);
      }
      
    }

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