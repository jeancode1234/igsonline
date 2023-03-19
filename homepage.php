<?php 
  session_start();
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
  <!-- <div id="authentication-modal" aria-hidden="true" class="hidden bg-black bg-opacity-80 overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            
            <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                <div class="flex justify-end p-2">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <form class="mt-4" action="connectdb.php" method="post">
                  <div class="mb-3">
                    <label class="mb-2 block text-xs font-semibold">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                  </div>

                <div class="mb-3">
                  <label class="mb-2 block text-xs font-semibold">Password</label>
                  <input type="password" name="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
                </div>

              <div class="mb-3 flex flex-wrap content-center">
                <input id="remember" type="checkbox" class="mr-1 checked:bg-purple-700" /> <label for="remember" class="mr-auto text-xs font-semibold">Remember for 30 days</label>
                <a href="#" class="text-xs font-semibold text-purple-700">Forgot password?</a>
              </div>

              <div class="mb-3">
                <button type="submit" name="submit" class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">Sign in</button>
                <button  class="flex flex-wrap justify-center w-full border border-gray-300 hover:border-gray-500 px-2 py-1.5 rounded-md">
                  <img class="w-5 mr-2" src="https://lh3.googleusercontent.com/COxitqgJr1sJnIDe8-jiKhxDx1FrYbtRHKJ9z_hELisAlapwE9LUPh6fcXIfb5vwpbMl4xl9H9TRFPc5NOO8Sb3VSgIBrfRYvW6cUA">
                  Sign in with Google
                </button>
              </div>
        </form>
        </div>
  </div> -->
  <div class="w-full">
     <?php include('navbar.php');?>
      <div class="w-full h-24 lg:h-14"></div>
      <?php include('message.php');?>
      <div class="w-full relative">
      <svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 -z-10" viewBox="0 0 1440 320"><path fill="#111827" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,224C384,213,480,139,576,101.3C672,64,768,64,864,101.3C960,139,1056,213,1152,229.3C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

           <div class="grid xs:grid-col-2 sm:grid-col-4 md:grid-cols-6 lg:grid-cols-8 xl:grid-cols-12 grid-flow-row gap-4 ">
                <div class="col-span-2 sm:col-span-4 md:col-span-6 lg:px-8 lg:col-span-4 xl:col-span-6 flex items-center justify-center">
                  <div class="w-full px-4  lg:px-8  lg:h-[200px] space-y-6 lg:space-y-10">
                      <h1 class="text-4xl xl:text-6xl text-gray-900 font-bold">Il est temps d'agir!</h1>
                     <p class="text-sm text-gray-500 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores repudiandae impedit expedita maxime dolore amet, debitis iusto facere ipsam.</p>
                     <div class="w-full lg:w-3/4 flex rounded-full overflow-hidden border bg-white border-gray-800">
                        <input type="text" name="search" class="w-3/5 h-12 px-4 border-none  bg-transparent focus:outline-none" placeholder="Search...">
                        <button class="w-2/5 h-12 flex items-center justify-center bg-gray-800 hover:bg-gray-900 text-white rounded-full ">Search</button>
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
        <div class="w-full container mx-auto px-4 space-y-8">
              <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-8 xl:grid-cols-12 grid-flow-row gap-4">
                    <div class="col-span-2 sm:col-span-3 md:col-span-4  group overflow-hidden h-[360px]  rounded-lg  relative cursor-pointer">
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
                    <div class="col-span-2 sm:col-span-3 md:col-span-4  group overflow-hidden h-[360px]  rounded-lg  relative cursor-pointer">
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
                    <div class="col-span-2 sm:col-span-3 md:col-span-4  group overflow-hidden h-[360px]  rounded-lg  relative cursor-pointer">
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
   <div class="w-full relative">
     <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 -z-10" viewBox="0 0 1440 320"><path fill="#111827" fill-opacity="1" d="M0,288L48,266.7C96,245,192,203,288,186.7C384,171,480,181,576,165.3C672,149,768,107,864,90.7C960,75,1056,85,1152,112C1248,139,1344,181,1392,202.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      <div class=" w-full container mx-auto px-4 md:px-0 py-8 space-y-8">
           <h1 class="text-6xl text-gray-800 lg:text-white font-bold text-center">Services</h1>
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