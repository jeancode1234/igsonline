<?php
 include("authentification.php");
 include("connexion.php");


 if (isset($_POST['delete_cat'])) {
    $cat=$_POST['delete_cat'];

    $query = $connect->query("DELETE FROM categorie WHERE cat_id ='$cat'");
    if ($query) {
        $_SESSION['message'] = "Categorie supprimée avec success";
          header("Location: admincat.php");
          exit(0);
     
    }else {
          $_SESSION['message'] = "Erreur lors de suppression";
          header("Location: admincat.php"); 
          exit(0);
    }
   }
 
if (isset($_POST['create_cat'])) {

    
    if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_FILES['image'])) {
       
        $cat_name = htmlspecialchars($_POST['nom']);
        $cat_des = htmlspecialchars($_POST['description']);
        $status = $_POST['status'] == true ? '1':'0';
        $image_name = $_FILES['image']['name'];
        $fichierTempo=$_FILES['image']['tmp_name'];
        $image_des ='img/'.$image_name;
        $image_extension = strrchr($image_name,".");
        $ext_auto = array('.png','.jpg','.jpeg');
      if (in_array($image_extension,$ext_auto)) {
          if (move_uploaded_file($fichierTempo,$image_des)) {
            $cat = $connect->prepare("INSERT INTO categorie(nom,description,image,status) VALUES(?,?,?,?)");
            $cat->execute(array($cat_name,$cat_des,$image_des,$status));

                $_SESSION['message'] ="categorie ajoutée avec success";
                header("Location: admincat.php");
                exit(0);
          }
        }else {
            $_SESSION['message']="Seuls les fichiers png,jpg ou jpeg  sont autorises";
            header("location: addcat.php");
            exit(0);
        }
    }else {
        $_SESSION['message'] ="Veuillez remplis correctement tous les champs";
        header("Location: addcat.php");
        exit(0);
    }
}
  
if (isset($_POST['update_cat'])) {

    
    if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_FILES['image'])) {
         $id = $_POST['cat_id'];
        $cat_name = htmlspecialchars($_POST['nom']);
        $cat_des = htmlspecialchars($_POST['description']);
        $status = $_POST['status'] == true ? '1':'0';
        $image_name = $_FILES['image']['name'];
        $fichierTempo=$_FILES['image']['tmp_name'];
        $image_des ='img/'.$image_name;
        $image_extension = strrchr($image_name,".");
        $ext_auto = array('.png','.jpg','.jpeg');
      if (in_array($image_extension,$ext_auto)) {
          if (move_uploaded_file($fichierTempo,$image_des)) {
            $cat = $connect->query("UPDATE categorie SET nom='$cat_name',description='$cat_des',image='$image_des',status='$status' WHERE cat_id='$id'");
            if ($cat) {
                $_SESSION['message'] ="categorie modifiée avec succès!!";
                header("Location: admincat.php");
                exit(0);
            }

                
          }
        }else {
            $_SESSION['message']="Seuls les fichiers png,jpg ou jpeg  sont autorises";
            header("location: addcat.php");
            exit(0);
        }
    }else {
        $_SESSION['message'] ="Veuillez remplis correctement tous les champs";
        header("Location: addcat.php");
        exit(0);
    }
}
?>