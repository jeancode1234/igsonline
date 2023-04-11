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
  <title>IGSONLINE</title>
</head>

<body>
           
  <!-- component -->
  <!-- <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="connectdb.php" method="POST">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                    <div>
                        <label for="name" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Your email</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50 border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="text-sm ml-3">
                            <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                    </div>
                    <button type="submit" name="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="register.php" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>  -->

  <div class="w-full h-96 md:h-screen">
     
     <?php include('navbar.php');?> 
     <?php include('message.php');?>
     <div class="w-full p-4 h-full flex items-center bg-cover bg-center bg-no-repeat" style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('img/pixel.webp');">
           <div class="w-full md:max-w-2xl h-[300px] space-y-8 lg:mx-14">
               <h1 class="text-5xl md:text-6xl xl:text-7xl text-white font-bold">Il est temps d'agir</h1>
               <p class="md:text-lg text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus animi inventore necessitatibus, hic adipisci voluptate aliquid maiores quae?</p>
                <div class="max-w-md md:max-w-lg flex relative h-12 overflow-hidden">
                     <input type="text" name="search" class="w-4/5 border-none focus:outline-none bg-white h-full" placeholder="rechercher un produit ici...">
                      <button class="w-1/5 h-full flex items-center justify-center bg-orange-500">
                           Rechercher
                      </button>

                </div>
           </div>
     </div>
     
  </div>
   <div class="w-full  bg-gray-900 py-8 space-y-8">
        
        <h1 class="text-4xl lg:text-6xl font-bold text-white text-center">New collection 2023</h1>
        <div class="w-full container sm:max-w-full  mx-auto px-4 space-y-8">
              <div class="grid grid-cols-2 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 grid-flow-row gap-4">
                    <?php $req= $connect->query("SELECT * FROM categorie ORDER BY cat_id desc LIMIT 3");
                      if ($req->rowCount()>0) {
                        while ($result = $req->fetch()) {?>
                          <div class="col-span-2 sm:col-span-3 md:col-span-4 lg:col-span-4 group overflow-hidden h-[360px]  rounded-lg  relative cursor-pointer">
                              <div class="w-full h-full absolute group-hover:bg-opacity-60 duration-300 group-hover:bg-black">
                                  <div class=" w-full h-full relative">
                                    <div class="absolute bottom-4 w-full px-4 py-2 space-y-4">
                                        <p class="invible text-transparent  group-hover:visible group-hover:text-white text-base"><?php echo $result['nom'] ;?></p>
                                        <a href="resultat.php?id=<?php echo $result['cat_id']; ?>" class="invible text-transparent  group-hover:visible group-hover:text-white text-base">see more</a>
                                    </div>
                                  </div>
                                
                              </div>
                              <img src="<?php echo $result['image'] ;?>" class="w-full h-full object-cover object-center" alt="">
                          
                            </div>
                        <?php  
                        }
                      }
                    ?>
                    
                    
              </div>
              <div class="w-full container sm:max-w-full  mx-auto  space-y-8">
                  <h3 class="text-white text-2xl font-semibold">Nouveautés</h3>
                   <?php
                      $product=$connect->query("SELECT * FROM produit ORDER BY created_at DESC LIMIT 4");
                   ?>
                  
                    <div class="grid grid-cols-4  md:grid-cols-4 lg:grid-cols-12 grid-flow-row gap-4">
                      <?php 
                        foreach ($product as $produit) {?>
                         <div class="col-span-2 lg:col-span-4 xl:col-span-3   overflow-hidden shadow-xl shadow-green-800/10 bg-white sm:h-[400px] md:h-[360px] ">
                                <div class="w-full sm:h-3/5 overflow-hidden ">
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
              <div class="w-full space-y-4 ">
                  <h3 class="text-white text-2xl font-semibold">Lastest Products Arrival</h3>
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
   </div>
   <div class="w-full ">
      <div class=" w-full container mx-auto px-4 md:px-0 py-8 space-y-8">
           <h1 class="text-6xl text-gray-800 font-bold text-center">Services</h1>
           <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-8 xl:grid-cols-12 grid-flow-row gap-4">
                    <div class="col-span-2 sm:col-span-3 md:col-span-4  group overflow-hidden h-[360px]  rounded-lg relative cursor-pointer">
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
                    <div class="col-span-2 sm:col-span-3 md:col-span-4  group overflow-hidden h-[360px]  rounded-lg relative cursor-pointer">
                        <div class="w-full h-full absolute group-hover:bg-opacity-60 duration-300 group-hover:bg-black">
                          <div class=" w-full h-full relative">
                             <div class="absolute bottom-4 w-full px-4 py-2 space-y-4">
                                 <p class="invible text-transparent  group-hover:visible group-hover:text-white text-base">Categories</p>
                                 <a href="" class="invible text-transparent  group-hover:visible group-hover:text-white text-base">see more</a>
                             </div>
                          </div>
                             
                         </div>
                          <img src="img/portfolio-8.jpg" class="w-full h-full object-cover object-center" alt="">
                         
                    </div>
                    <div class="col-span-2 sm:col-span-3 md:col-span-4  group overflow-hidden h-[360px]  rounded-lg relative cursor-pointer">
                        <div class="w-full h-full absolute group-hover:bg-opacity-60 duration-300 group-hover:bg-black">
                          <div class=" w-full h-full relative">
                             <div class="absolute bottom-4 w-full px-4 py-2 space-y-4">
                                 <p class="invible text-transparent  group-hover:visible group-hover:text-white text-base">Categories</p>
                                 <a href="" class="invible text-transparent  group-hover:visible group-hover:text-white text-base">see more</a>
                             </div>
                          </div>
                             
                         </div>
                          <img src="img/portfolio-6.jpg" class="w-full h-full object-cover object-center" alt="">
                         
                    </div>
           </div>
      </div>
  </div>
 
  <div class="w-full h-14"></div>
  <?php include('footer.php') ?>
  
</body>

</html>