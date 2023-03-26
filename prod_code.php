<?php
 include("authentification.php");
 include("connexion.php");


 if (isset($_POST['delete_prod'])) {
    $cat=$_POST['delete_prod'];

    $query = $connect->query("DELETE FROM produit WHERE prod_id ='$cat'");
    if ($query) {
        $_SESSION['message'] = "Produit supprimé avec success";
          header("Location: adminpro.php");
          exit(0);
     
    }else {
          $_SESSION['message'] = "Erreur lors de suppression";
          header("Location: adminpro.php"); 
          exit(0);
    }
   }
 
if (isset($_POST['create_prod'])) {

    
    if (!empty($_POST['titre']) && !empty($_POST['soustitre']) && !empty($_FILES['image']) && !empty($_POST['categorie']) && !empty($_POST['description'])) {
       
        $titre = htmlspecialchars($_POST['titre']);
        $soustitre = htmlspecialchars($_POST['soustitre']);
        $cat = $_POST['categorie'];
        $des = htmlspecialchars($_POST['description']);
        $photo = $_FILES['image']['name'];
        $fichierTempo=$_FILES['image']['tmp_name'];
        move_uploaded_file($fichierTempo,'./img/'.$photo);
        $pro = $connect->prepare("INSERT INTO produit(titre,soustitre,description,image,cat_id) VALUES(?,?,?,?,?)");
        $pro->execute(array($titre,$soustitre,$des,$photo,$cat));

        $_SESSION['message'] ="produit ajoutée avec success";
        header("Location: addprod.php");
        $sel = $connect->query("SELECT * FROM user");
        if ($sel->rowCount()>0) {
           
           foreach ($sel as $user) {
               
               mail($user['email'],"information","Nouveau produit disponible sur notre plateforme");
           }
        }
        exit(0);
    }else {
        $_SESSION['message'] ="Veuillez remplis correctement tous les champs";
        header("Location: addprod.php");
        exit(0);
    }

   
}
  

?>