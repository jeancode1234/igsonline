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
    <title>Dashboard</title>
</head>

<body>
    <div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">


        <nav class="flex px-5 py-3 text-gray-700 justify-between rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Accueil
                    </a>
                </li>
                <li class="inline-flex items-center">
                    <a href="addprod.php" class=" px-4 py-2 rounded bg-gray-800 hover:bg-gray-900 inline-flex items-center text-sm font-medium text-white hover:text-white dark:text-white dark:hover:text-white">
                        Ajouter un nouveau produit
                    </a>
                </li>
            </ol>

            <div class="w-96 md:w-80">
                <form action="adminpro.php" method="get" class="w-full flex relative rounded-full border-1 overflow-hidden   border border-gray-800/10">
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

        <div class="overflow-x-scroll">
            <table class="w-full whitespace-nowrap">
                <thead class="bg-gray-800 text-white">
                    <th class="text-left py-3 px-2 rounded-l-lg">ID</th>
                    <th class="text-left py-3 px-2">Titre</th>
                    <th class="text-left py-3 px-2">Description</th>
                    <th class="text-left py-3 px-2">Image</th>
                   
                    <th class="text-left py-3 px-2 rounded-r-lg">Actions</th>
                </thead>
                <?php
                $list = $connect->query("SELECT * FROM produit ORDER BY prod_id desc");
                if (isset($_GET['submit']) && !empty($_GET['search'])) {
                    $all = htmlspecialchars($_GET['search']);
                    $list = $connect->query("SELECT * FROM produit WHERE titre LIKE '%" . $all . "%' ORDER BY prod_id desc");
                }
                if ($list->rowCount() > 0) {

                     while ($a = $list->fetch()) { ?>

                        <tr class="border-b border-gray-700">
                            <td class="py-3 px-2"><?php echo $a['prod_id']; ?></td>

                            <td class="py-3 px-2"><?php echo $a['titre']; ?></td>
                            <td class="py-3 px-2"><?php echo $a['description']; ?></td>
                            <td class="py-3 px-2"><img src="img/<?php echo $a['image']; ?>" alt="" class="w-14 h-14"></td>


                            <td class="py-3 px-2">
                                <div class="inline-flex items-center space-x-3">
                                    <a href="prod_edit.php?id=<?php echo $a['prod_id']; ?>" title="Edit" class="hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>
                                    <a href="" title="Edit password" class="hover:text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                    </a>
                                    <form action="prod_code.php" method="post">
                                        <button type="submit" name="delete_prod" value="<?php echo $a['prod_id']; ?>" class="mt-2">
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
                } else { ?>
                    <h1 class="text-2xl text-red-600 font-serif font-medium text-center">Aucun produit trouvé</h1>
                <?php
                }; ?>

            </table>
        </div>

    </div>
</body>

</html>