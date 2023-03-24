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
        $photo = $_FILES['image']['name'];
        $fichierTempo=$_FILES['image']['tmp_name'];
        move_uploaded_file($fichierTempo,'./img/'.$photo);
        $cat = $connect->prepare("INSERT INTO categorie(nom,description,image,status) VALUES(?,?,?,?)");
        $cat->execute(array($cat_name,$cat_des,$photo,$status));

        $_SESSION['message'] ="categorie ajoutée avec success";
        header("Location: addcat.php");
        exit(0);
    }else {
        $_SESSION['message'] ="Veuillez remplis correctement tous les champs";
        header("Location: addcat.php");
        exit(0);
    }
}
  

?>