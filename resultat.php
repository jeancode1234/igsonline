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
    <div class="w-full h-auto">
        <?php include("navbar.php");?>
        <div class="w-full h-14"></div>
          <div class="w-full container md:max-w-full lg:max-w-7xl p-4 lg:p-8 mx-auto  md:h-[480px] lg:h-[600px]">
            <?php
              if (isset($_GET['id'])) {
                   $cat_id = $_GET['id'];
                   $req= $connect->query("SELECT * FROM categorie WHERE cat_id='$cat_id'");
              }
            ?>
              <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-10 grid-flow-row gap-4 lg:gap-8 md:h-full">
                  <?php
                      if ($req->rowCount()>0) {
                        if ($result=$req->fetch()) {?>
                             <div class="col-span-4 lg:col-span-5 overflow-hidden md:h-full">
                                  <img src="img/<?php echo $result['image'];?>" class=" h-full hover:scale-110 duration-300 object-cover object-center w-full" alt="">
                             </div>
                             <div class="col-span-4 lg:col-span-5 overflow-hidden space-y-4 md:h-full">
                                <h1 class="text-2xl lg:text-4xl font-bold text-gray-800"><?php echo $result['nom'] ;?></h1>
                                <p class="leading-loose text-base text-gray-800"> <?php echo $result['description'];?></p>
                             </div>
                        <?php
                        }
                      }
                  ?>
                  
              </div>
          </div>

           <div class="w-full container mx-auto space-y-4 py-8">
                  <h3 class="text-gray-800 text-2xl font-semibold">Produits de la categorie</h3>
                   <?php
                      if (isset($_GET['id'])) {
                         $cat_id =$_GET['id'];
                         $product= $connect->query("SELECT * FROM produit WHERE produit.cat_id='$cat_id' order by prod_id desc");
                       
                          }
                      
                   
                   ?>
                  
                    <div class="grid grid-cols-4  md:grid-cols-4 lg:grid-cols-12 grid-flow-row gap-2 md:gap-4">
                      <?php 
                        foreach ($product as $produit) {?>
                         <div class="col-span-2 lg:col-span-4 xl:col-span-3   overflow-hidden shadow-xl shadow-green-800/10 bg-white h-[260px] md:h-[360px] ">
                                <div class="w-full h-3/5 overflow-hidden ">
                                        <img src="img/<?php echo $produit['image'];?>" class="transform hover:scale-125 duration-300 w-full h-full" alt="">
                                </div>
                                    <div class="w-full  p-4 space-y-2">
                                        <h1 class="text-lg font-bold text-gray-800"><?php echo $produit['titre'] ?></h1>
                                            <p class="text-sm text-gray-600"><?php echo $produit['description'] ?></p>
                                        <div class="w-full py-2">
                                            <a href="" class="px-4 py-2 shadow-md bg-gray-800 text-white hover:bg-gray-900"> voir plus</a>

                                        </div>
                                    </div>
                                
                            </div>
                        <?php    
                        }
                      ?>
                           
                        
                
                    </div>
           </div>
    </div>
    
    <?php include("footer.php"); ?>
</body>
</html>