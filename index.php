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

  <div class="w-full">
     <?php include('navbar.php');?> 
      <div class="w-full h-24 lg:h-14"></div>
      <?php include('message.php');?>
      <div class="w-full relative">
      <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 -z-10" viewBox="0 0 1440 320"><path fill="#111827" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,224C384,213,480,139,576,101.3C672,64,768,64,864,101.3C960,139,1056,213,1152,229.3C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

           <div class="grid xs:grid-col-2 sm:grid-col-4 md:grid-cols-6 lg:grid-cols-8 xl:grid-cols-12 grid-flow-row gap-4 ">
                <div class="col-span-2 sm:col-span-4 md:col-span-6 lg:px-8 lg:col-span-4 xl:col-span-6 flex items-center justify-center">
                  <div class="w-full px-4  lg:px-8  lg:h-[200px] space-y-6 lg:space-y-10">
                      <h1 class="text-4xl xl:text-5xl  text-gray-900 font-bold">Il est temps d'agir!</h1>
                     <p class="text-sm text-gray-500 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores repudiandae impedit expedita maxime dolore amet, debitis iusto facere ipsam.</p>
                     <div class="w-full lg:w-3/4 flex rounded-full overflow-hidden border bg-white border-gray-800">
                        <input type="text" name="search" class="w-4/5 h-12 px-4 border-none  bg-transparent focus:outline-none" placeholder="Search...">
                        <button class="w-1/5 h-12 flex items-center justify-center bg-gray-800 hover:bg-gray-900 text-white rounded-full "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            </button>
                     </div>
                  </div>
                     
                </div>
                <div class="col-span-2 sm:col-span-4 md:col-span-6 lg:col-span-4 xl:col-span-6 overflow-hidden">
                      
                           <img src="img/elegance.png" class="w-full h-full object-cover object-left" alt="">
                      
                </div>
           </div>
      </div>

  </div>
   <div class="w-full bg-gray-900 py-8 space-y-8">
        
        <h1 class="text-4xl lg:text-6xl font-bold text-white text-center">New collection 2023</h1>
        <div class="w-full container sm:max-w-full  mx-auto px-4 space-y-8">
              <div class="grid grid-cols-2 sm:grid-cols-6 md:grid-cols-8 xl:grid-cols-12 grid-flow-row gap-4">
                    <?php $req= $connect->query("SELECT * FROM categorie ORDER BY cat_id desc LIMIT 3");
                      if ($req->rowCount()>0) {
                        while ($result = $req->fetch()) {?>
                          <div class="col-span-2 sm:col-span-3 md:col-span-4  group overflow-hidden h-[360px]  rounded-lg  relative cursor-pointer">
                              <div class="w-full h-full absolute group-hover:bg-opacity-60 duration-300 group-hover:bg-black">
                                  <div class=" w-full h-full relative">
                                    <div class="absolute bottom-4 w-full px-4 py-2 space-y-4">
                                        <p class="invible text-transparent  group-hover:visible group-hover:text-white text-base"><?php echo $result['nom'] ;?></p>
                                        <a href="resultat.php?id=<?php echo $result['cat_id']; ?>" class="invible text-transparent  group-hover:visible group-hover:text-white text-base">see more</a>
                                    </div>
                                  </div>
                                
                              </div>
                              <img src="img/<?php echo $result['image'] ;?>" class="w-full h-full object-cover object-center" alt="">
                          
                            </div>
                        <?php  
                        }
                      }
                    ?>
                    
                    
              </div>
              <div class="w-full space-y-4 py-8">
                  <h3 class="text-white text-2xl font-semibold">New Products Arrival</h3>
                  <div class="grid grid-cols-4 md:grid-cols-12 grid-flow-row gap-2 md:gap-4">
                        <div class="col-span-2 md:col-span-4 xl:col-span-3  group overflow-hidden h-[260px] md:h-[360px]  rounded-lg  relative cursor-pointer">
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
                        <div class="col-span-2 md:col-span-4 xl:col-span-3  group overflow-hidden h-[260px] md:h-[360px]  rounded-lg  relative cursor-pointer">
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
                        <div class="col-span-2 md:col-span-4 xl:col-span-3  group overflow-hidden h-[260px] md:h-[360px]  rounded-lg  relative cursor-pointer">
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
                        <div class="col-span-2 md:col-span-4 xl:col-span-3  group overflow-hidden h-[260px] md:h-[360px]  rounded-lg  relative cursor-pointer">
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