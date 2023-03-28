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
        <div class="w-full h-18"></div>
        <nav class = "flex px-5 py-3 text-gray-700 justify-between rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
            <ol class = "inline-flex items-center space-x-1 md:space-x-3">
                <li class = "inline-flex items-center">
                    <a href="#" class = "inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class = "w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Accueil
                    </a>
                </li>
                <li class = "inline-flex items-center">
                    <a href="adduser.php" class = " px-4 py-2 rounded bg-gray-800 hover:bg-gray-900 inline-flex items-center text-sm font-medium text-white hover:text-white dark:text-white dark:hover:text-white">
                        Ajouter un nouvel utilisateur
                    </a>
                </li>
            </ol>

            <div class="w-80">
                <form action="adminindex.php" method="get" class="w-full flex relative rounded-full border-1 overflow-hidden   border border-gray-800/10">
                  <input type="text" autocomplete="off" name="search" placeholder="search..." class="w-4/5  p-2  bg-white rounded-r-full focus:outline-none border-none transform translate-x-4">
                  <button type="submit" name="submit" class="w-1/5 py-2 flex items-center justify-center bg-gray-600 hover:bg-gray-700 text-white overflow-hidden rounded-r-full">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>

                  </button>
               </form>
            </div>
        </nav>
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