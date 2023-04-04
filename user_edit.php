<?php
  
  include("authentification.php");
  include("connexion.php");
  include("sidebar.php");
  include("topnavbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adminuser_edit</title>
</head>
<body>
    <div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
    
    
        <nav class = "flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
            <ol class = "inline-flex items-center space-x-1 md:space-x-3">
                <li class = "inline-flex items-center">
                    <a href="adminindex.php" class = "inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class = "w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class = "flex items-center">
                        <svg class = "w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path></svg>
                        <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Page d'edition des utilisateurs</a>
                    </div>
                </li>
            </ol>
        </nav>
         
        <div id="content" class=" col-span-9 rounded-lg p-6 flex flex-col items-center justify-center">
        
					<?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $edit = $connect->query("SELECT * FROM user WHERE client_id='$id'");
                        if ($edit->rowCount()>0) {
                            foreach ($edit as $edi) {?>
                            <div class="w-full shadow rounded-b-2xl sm:max-w-sm md:max-w-2xl lg:max-w-4xl xl:max-w-7xl">
                                <?php include("message.php");?>
                                <div class="w-full h-2 bg-gray-900 transfrom -translate-y-2 rounded-t-full"></div>
                                <h3 class="pt-4 text-2xl text-center text-gray-800">Admin Edit User Form</h3>
                                <form action="code.php" method="POST" class="w-full space-y-8 p-8">
                                        <input type="hidden" name="user_id" value="<?php echo $edi['client_id'] ;?>">
                                        <div class="w-full md:flex items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
                                        <div class="relative w-full md:w-1/2">
                                            <input type="text" value="<?php echo $edi['nom']?>" require name="nom" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-800 focus:outline-none focus:ring-0 focus:border-gray-800 peer" placeholder=" " />
                                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-800 peer-focus:dark:text-gray-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nom Complet</label>
                                        </div>
                                        <div class="relative w-full md:w-1/2">
                                            <input type="email" value="<?php echo $edi['email']?>" require name="email" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-800 peer" placeholder=" " />
                                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                                        </div>
                                        </div>
                                        <div class="w-full md:flex items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
                                        <div class="relative w-full md:w-1/2">
                                            <input type="text" value="<?php echo $edi['adresse']?>" require name="adresse" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-800 peer-focus:dark:text-gray-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Adresse</label>
                                        </div>
                                        <div class="relative w-full md:w-1/2">
                                            <input type="text" value="<?php echo $edi['telephone']?>" require name="telephone" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-800 peer-focus:dark:text-gray-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Téléphone</label>
                                        </div>
                                        </div>
                                        <div class="w-full md:flex items-center justify-center space-y-4 md:space-y-0 md:space-x-4">
                                            <div class="relative w-full md:w-1/2">
                                                <input type="password" name="password" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" require placeholder=" " />
                                                <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-800 peer-focus:dark:text-gray-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Mot de passe</label>
                                            </div>
                                            <div class="relative w-full md:w-1/2">
                                                <select name="role_as" id="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" require>
                                                    <option value="" selected disabled>---Select an option---</option>
                                                    <option value="1" <?php echo $edi['role_as']=="1" ? 'selected':"";?>>Admin</option>
                                                    <option value="0" <?php echo $edi['role_as']=="0" ? 'selected':"";?>>User</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w-full ">
                                            <div class=" w-full">
                                                <label for="status" class="text-gray-800 font-semibold">Status</label>
                                                <input type="checkbox" <?php echo $edi['status']=='1'?'checked':""?> name="status" id="status" width="70px" height="70px" require placeholder=" " />
                                            </div>
                                            
                                        </div>
                                        <div class="mb-6 text-center">
                                                <button class="w-full px-4 py-3 font-bold text-white bg-gray-800 rounded-lg hover:gray-900 focus:outline-none focus:shadow-outline" type="submit" name="update_user">
                                                    Update User
                                                </button>
                                        </div>
                                        
                                </form>
                            </div>
                            <?php   
                            }
                    }else {?>
                            <div class="w-full py-4 text-2xl text-red-600 text-center">
                                        Data not found
                            </div>
                      <?php  
                    }
                    
                } 
                ?>
		      
		
        </div>
   </div>
</body>
</html>