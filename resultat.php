<?php
session_start();
include("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>resultat</title>
</head>

<body>
    <?php include("navbar.php"); ?>
    <div class="w-full h-auto">
        
        <div class="w-full py-14 bg-gray-100 flex items-center justify-center">
            <div class="w-full container mx-auto space-y-8">
                <?php
                if (isset($_GET['id'])) {
                    $cat_id = $_GET['id'];
                    $fetch = $connect->query("SELECT * FROM categorie WHERE cat_id='$cat_id'");
                    if ($donnees = $fetch->fetch()) { ?>
                        <p class="font-bold font-sans text-4xl lg:text-6xl text-center text-gray-700"><?php echo $donnees['nom']; ?></p>
                        <div class="w-full flex justify-center space-x-2">
                            <p class="inline-flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                <a href="index.php" class="text-gray-800 text-lg font-sans hover:text-orange-500">Accueil</a>
                                <span>/</span>
                            </p>
                            <p class="text-gray-800 text-lg font-sans">
                                
                            <a href="allcat.php" class="text-gray-800 text-lg font-sans hover:text-orange-500">Categories</a>

                                <span>/</span>
                            </p>
                            
                            <p class="text-gray-500 text-lg font-sans"><?php echo $donnees['nom'] ;?></p>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>

        <div class="w-full lg:flex gap-8">
            <div class="w-full lg:w-1/4 px-4 py-8 bg-white lg:flex space-x-4 lg:flex-col lg:space-y-4 lg:overflow-y-scroll ">
               <div class="w-full p-4 space-y-2">
                     <p class="text-xl uppercase font-semibold">Product categories</p>
                     <div class="w-24 h-0.5 bg-orange-300"></div>
               </div>
               <div class="w-full flex flex-wrap  items-center gap-2">
               <?php
                  
                  $fetch = $connect->query("SELECT * FROM categorie ORDER BY cat_id DESC");
                  while ($donnees = $fetch->fetch()) { ?>
                     <a href="resultat.php?id=<?php echo $donnees['cat_id'];?>" class="p-2 rounded hover:bg-gray-300 hover:text-orange-600"><?php echo $donnees['nom']?>
                       <span>
                        
                         <?php
                         if (isset($_GET['id'])) {
                            $id=$_GET['id'];
                         
                           $pro= $connect->query("SELECT * FROM produit WHERE cat_id='$id'");
                           $ps=$pro->rowCount();
                           if ($ps) {?>
                             (<?php echo $ps;?>)
                            <?php
                           }
                        }
                         ?>
                       </span>
                     </a>
                 <?php
                  }
              
              ?>
               </div>
               
            </div>
           <div class="w-full lg:w-3/4 h-full ">
                 <div class="grid grid-cols-4 lg:grid-cols-12 grid-flow-row gap-4">
                       <?php
                           if (isset($_GET['id'])) {
                            $id=$_GET['id'];
                            $prod=$connect->query("SELECT * FROM produit WHERE cat_id='$id'");
                            if($prod->rowCount()> 0){
                                foreach ($prod as $data) {?>
                                    <div class="col-span-2 lg:col-span-4 xl:col-span-3 overflow-hidden hover:shadow-xl cursor-pointer">
                                        <div class="w-full h-96 overflow-hidden">
                                             <img src="<?php echo $data['image'];?>" class="w-full h-full object-contain object-center" alt="">
                                        </div>
                                    </div>
                                  <?php   
                                  }
                            }
                            
                           }
                       ?>
                 </div>
           </div>

        </div>
    </div>

    <?php include("footer.php"); ?>
</body>

</html>