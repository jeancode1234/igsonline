<?php
  include("authentification.php");
  include("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<div class="grid grid-cols-12  min-h-screen bg-gray-100 text-white gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 px-2">
    <?php 
        include("adminavbar.php")
    ?>
    <div id="content" class=" col-span-9 rounded-lg p-6 flex items-center justify-center">
    
					<?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $edit = $connect->query("SELECT * FROM user WHERE client_id='$id'");
                        if ($edit->rowCount()>0) {
                            foreach ($edit as $edi) {?>
                            <div class="w-full shadow-2xl rounded-b-2xl bg-white sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl 2xl:max-w-2xl">
                                <div class="w-full h-2 bg-gray-900 transfrom -translate-y-2 rounded-t-full"></div>
                                <h3 class="pt-4 text-2xl text-center text-gray-800">Admin Edit User Form</h3>
                                <form action="code.php" method="POST" class="w-full space-y-8 p-8">
                                        <input type="hidden" name="user_id" value="<?php echo $edi['client_id'] ;?>">
                                        <div class="w-full md:flex space-x-4">
                                        <div class="relative w-full md:w-1/2">
                                            <input type="text" value="<?php echo $edi['nom']?>" require name="nom" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-gray-800 focus:outline-none focus:ring-0 focus:border-gray-800 peer" placeholder=" " />
                                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-800 peer-focus:dark:text-gray-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Nom Complet</label>
                                        </div>
                                        <div class="relative w-full md:w-1/2">
                                            <input type="email" value="<?php echo $edi['email']?>" require name="email" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-gray-800 peer" placeholder=" " />
                                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
                                        </div>
                                        </div>
                                        <div class="w-full md:flex space-x-4">
                                        <div class="relative w-full md:w-1/2">
                                            <input type="text" value="<?php echo $edi['adresse']?>" require name="adresse" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-800 peer-focus:dark:text-gray-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Adresse</label>
                                        </div>
                                        <div class="relative w-full md:w-1/2">
                                            <input type="text" value="<?php echo $edi['telephone']?>" require name="telephone" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-gray-800 peer-focus:dark:text-gray-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Téléphone</label>
                                        </div>
                                        </div>
                                        <div class="w-full md:flex space-x-4">
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