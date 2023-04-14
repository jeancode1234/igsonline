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

    
    if (!empty($_POST['titre']) && !empty($_POST['soustitre']) && !empty($_FILES['image']) && 
       !empty($_POST['categorie']) && !empty($_POST['description'])) {
       
        $titre = htmlspecialchars($_POST['titre']);
        $soustitre = htmlspecialchars($_POST['soustitre']);
        $cat = $_POST['categorie'];
        $des = htmlspecialchars($_POST['description']);
        $image_name = $_FILES['image']['name'];
        $fichierTempo=$_FILES['image']['tmp_name'];
        $image_des ='img/'.$image_name;
        $image_extension = strrchr($image_name,".");
        $ext_auto = array('.png','.jpg','.jpeg','.webp');
      if (in_array($image_extension,$ext_auto)) {
          if (move_uploaded_file($fichierTempo,$image_des)) {
            $sel = $connect->prepare("INSERT INTO categorie(titre,soustitre,description,image,cat_id) VALUES(?,?,?,?,?)");
            $sel->execute(array($titre,$soustitre,$des,$image_des,$cat));

                $_SESSION['message'] ="produit ajouté avec succès";
                header("Location: adminprod.php");
                 
                $user= $connect->query("SELECT email FROM user");
                if ($user->rowCount()>0) {
                   foreach ($user as $data) {
                      mail($data['email'],"Nouveau produit disponible","Un nouveau produit vient etre ajouté sur la plateform");
                   }
                }
                exit(0);
          }
        }

   
    }else {
    $_SESSION['message'] ="Veuillez remplis correctement tous les champs";
    header("Location: addprod.php");
    exit(0);
}
  
}
?>