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
     <title>Document</title>

</head>
<body>

<div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
    
    
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
        <?php include("message.php"); ?>
        <!-------body contain-------->
        <div class = "flex flex-wrap my-5 -mx-2">
            <div class = "w-full md:w-1/2 lg:w-1/4 p-2">
                <div class = "flex items-center flex-row w-full bg-gray-800 rounded-md p-3">
                    <div class = "flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "object-scale-down transition duration-500">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                    <div class = "flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class = "text-xs whitespace-nowrap">
                            Total User
                        </div>
                        <?php 
                          $print= $connect->query("SELECT * FROM user");
                          $ol= $print->rowCount();
                        ?>
                        <div class = "">
                            <?php echo $ol;?>
                        </div>
                    </div>
                    <div class = " flex items-center flex-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class = "w-full md:w-1/2 lg:w-1/4 p-2 ">
                <div class = "flex items-center flex-row w-full bg-gray-800 rounded-md p-3">
                    <div class = "flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "object-scale-down transition duration-500 ">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>
                    </div>
                    <div class = "flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class = "text-xs whitespace-nowrap">
                            Total Product
                        </div>
                        <?php 
                          $print= $connect->query("SELECT * FROM produit");
                          $ol= $print->rowCount();
                        ?>
                        <div class = "">
                            <?php echo $ol;?>
                        </div>
                    </div>
                    <div class = " flex items-center flex-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class = "w-full md:w-1/2 lg:w-1/4 p-2">
                <div class = "flex items-center flex-row w-full bg-gray-800 rounded-md p-3">
                    <div class = "flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "object-scale-down transition duration-500">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>
                    </div>
                    <div class = "flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class = "text-xs whitespace-nowrap">
                            Total Categorie
                        </div>
                        <?php 
                          $print= $connect->query("SELECT * FROM categorie");
                          $ol= $print->rowCount();
                        ?>
                        <div class = "">
                            <?php echo $ol ;?>
                        </div>
                    </div>
                    <div class = " flex items-center flex-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class = "w-full md:w-1/2 lg:w-1/4 p-2">
                <div class = "flex items-center flex-row w-full bg-gray-800 rounded-md p-3">
                    <div class = "flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 rounded-md flex-none w-8 h-8 md:w-12 md:h-12 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "object-scale-down transition duration-500">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>
                    </div>
                    <div class = "flex flex-col justify-around flex-grow ml-5 text-white">
                        <div class = "text-xs whitespace-nowrap">
                            Total Services
                        </div>
                        <?php 
                          $print= $connect->query("SELECT * FROM services");
                          $ol= $print->rowCount();
                        ?>
                        <div class = "">
                            <?php echo $ol ;?>
                        </div>
                    </div>
                    <div class = " flex items-center flex-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class = "w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>
      
                       
                <div class="overflow-x-scroll">
                    <table class="w-full whitespace-nowrap">
                        <thead class="bg-gray-800 text-white">
                            <th class="text-left py-3 px-2 rounded-l-lg">ID</th>
                            <th class="text-left py-3 px-2">Nom</th>
                            <th class="text-left py-3 px-2">Email</th>
                            <th class="text-left py-3 px-2">Adresse</th>
                            <th class="text-left py-3 px-2">Téléphone</th>
                            <th class="text-left py-3 px-2">Role</th>
                            <th class="text-left py-3 px-2">Statut</th>
                            <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
                        </thead>
                        <?php 
                            $list=$connect->query("SELECT * FROM user ORDER BY client_id desc");
                            if (isset($_GET['submit']) && !empty($_GET['search'])) {
                                $all= htmlspecialchars($_GET['search']);
                                $list=$connect->query("SELECT * FROM user WHERE nom LIKE '%".$all."%' ORDER BY client_id desc");
                            }
                            if ($list->rowCount()>0) {
                            
                            while ($a = $list->fetch()) {?>

                        <tr class="border-b border-gray-700">
                            <td class="py-3 px-2"><?php echo $a['client_id'] ;?></td>
                            <td class="py-3 px-2 font-bold">
                                <p><?php echo $a['nom'] ;?></p>
                            </td>
                            <td class="py-3 px-2"><?php echo $a['email'] ;?></td>
                            <td class="py-3 px-2"><?php echo $a['adresse'] ;?></td>
                            <td class="py-3 px-2"><?php echo $a['telephone'] ;?></td>
                            <td class="py-3 px-2"><?php  if ($a['role_as'] =="0") {
                                echo "Utilisateur";
                                }else {
                                echo "Administrateur";
                                }
                                ?></td>
                            <td class="py-3 px-2"><?php 
                                if ($a['status'] =="0") {
                                echo "Bloquer" ;
                                }else {
                                echo "Approved" ;
                                }
                                ?>
                            </td>
                            <td class="py-3 px-2">
                                <div class="inline-flex items-center space-x-3">
                                    <a href="user_edit.php?id=<?php echo $a['client_id'];?>" title="Edit" class="hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                    </a>
                                    <a href="code.php?id=<?php echo $a['client_id'];?>" title="Edit password" class="hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                    </a>
                                        <form action="code.php" method="post">
                                        <button type="submit" name="delete_user"  value="<?php echo $a['client_id'];?>" class="mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                            <?php
                            }
                        }else {?>
                            <h1 class="text-2xl text-red-600 font-serif font-medium text-center">Aucun utilisateur trouvé</h1>
                        <?php  
                        }
                        ;?>
                        
                    </table>
                </div>
                    
</div>


</body>
</html>
