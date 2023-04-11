<?php
include("authentification.php");
include("connexion.php");

if(isset($_POST['submit'])){
    if (!empty($_POST['nom'])  && !empty($_FILES) && !empty($_POST['description']) ) {
        
       $cat = $_POST['nom'];
       $user = $_POST['description'];
       $image_name = $_FILES['image']['name'];
       $fichierTempo=$_FILES['image']['tmp_name'];
       $image_des ='img/'.$image_name;
       $image_extension = strrchr($image_name,".");
       $ext_auto = array('.png','.jpg','.jpeg');
       if (in_array($image_extension,$ext_auto)) {
           if (move_uploaded_file($fichierTempo,$image_des)) {
               $pro = $connect->prepare("INSERT INTO services(nom,image,description) VALUES(?,?,?)");
               $pro->execute(array($cat,$image_des,$user));
               $_SESSION['message'] ="Service créé avec succes ";
               header("Location: adminser.php");
               exit(0);  
           }
       }else {
           $_SESSION['message']="Seuls les fichiers PDF sont autorises";
           header("location: addserv.php");
           exit(0);
       }
     
    }else {
       $_SESSION['message'] ="Erreur ";
       header("Location: addserv.php");
       exit(0);
    }
 }

 if(isset($_POST['edit_serv'])){
    if (!empty($_POST['nom'])  && !empty($_FILES) && !empty($_POST['description']) ) {
        $id = $_POST['id'];
       $serv = $_POST['nom'];
       $desc = $_POST['description'];
       $image_name = $_FILES['image']['name'];
       $fichierTempo=$_FILES['image']['tmp_name'];
       $image_des ='img/'.$image_name;
       $image_extension = strrchr($image_name,".");
       $ext_auto = array('.png','.jpg','.jpeg');
       if (in_array($image_extension,$ext_auto)) {
           if (move_uploaded_file($fichierTempo,$image_des)) {
               $pro = $connect->query("UPDATE services SET nom='$serv',image='$image_des',description='$desc' WHERE service_id='$id'");
              if ($pro) {
                $_SESSION['message'] ="Service modifié avec succès ";
                header("Location: adminser.php");
                exit(0); 
              }
               
           }
       }else {
           $_SESSION['message']="Seuls les fichiers png,jpg ou jpeg sont autorisés";
           header("location: addserv.php");
           exit(0);
       }
     
    }else {
       $_SESSION['message'] ="veuillez renseigné tous les champs!";
       header("Location: addserv.php");
       exit(0);
    }
 }
?>