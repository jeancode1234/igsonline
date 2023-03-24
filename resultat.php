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

          <div class="w-full space-y-4 py-8">
                  <h3 class="text-white text-2xl font-semibold">New Products Arrival</h3>
                  <div class="grid grid-cols-4  md:grid-cols-4 lg:grid-cols-12 grid-flow-row gap-2 md:gap-4">
                        <div class="col-span-2 lg:col-span-4 xl:col-span-3  group overflow-hidden h-[260px] md:h-[360px]  rounded-lg  relative cursor-pointer">
                            <div class="w-full h-full absolute group-hover:bg-opacity-60 duration-300 group-hover:bg-black">
                              <div class=" w-full h-full relative">
                                <div class="absolute bottom-4 w-full px-4 py-2 space-y-4">
                                    <p class="invible text-transparent  group-hover:visible group-hover:text-white text-base">Categories</p>
                                    <a href="" class="invible text-transparent  group-hover:visible group-hover:text-white text-base">see more</a>
                                </div>
                              </div>
                                
                            </div>
                              <img src="img/portfolio-7.jpg" class="w-full h-full object-cover object-center" alt="">
                            
                        </div>
                       
                  </div>
              </div>
    </div>
    
    
</body>
</html>