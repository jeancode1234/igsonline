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
    <title>Document</title>
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
                    <a href="adminser.php" class=" px-4 py-2 rounded bg-gray-800 hover:bg-gray-900 inline-flex items-center text-sm font-medium text-white hover:text-white dark:text-white dark:hover:text-white">
                        Retour
                    </a>
                </li>
            </ol>


        </nav>
        <?php include("message.php"); ?>
        <div class="w-full h-14"></div>
        <!-------body contain-------->

        <div class="w-full container mx-auto px-4 md:px-0">

            <div class="w-full md:max-w-2xl lg:max-w-3xl mx-auto ">
                <div class="w-full flex justify-center p-4 ">
                    <h1 class="text-center text-gray-800 text-xl font-bold">Modification d'un nouveau service</h1>
                </div>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $req = $connect->query("SELECT * FROM services WHERE service_id ='$id'");
                    if ($req->rowCount() > 0) {
                        foreach ($req as $data) { ?>
                            <form action="serv_code.php" method="post" enctype="multipart/form-data" class="w-full space-y-4">
                                <input type="hidden" name="id" value="<?php echo $data['service_id'] ;?>">
                                <div class="w-full md:flex space-y-4 md:space-y-0 md:space-x-4">
                                    <input type="text" name="nom" class="w-full border p-2 focus:outline-none focus:ring-2  focus:ring-gray-700" placeholder="Entrez le nom de la categorie">
                                    <input type="file" name="image" class="w-full border p-2 focus:outline-none focus:ring-2 focus:ring-gray-700">
                                </div>

                                <textarea name="description" id="" class="w-full border p-2 h-44 focus:outline-none focus:ring-2 focus:ring-gray-700"></textarea>
                                <button type="submit" name="submit" class=" w-full h-12 bg-gray-800 hover:bg-gray-900 flex items-center justify-center text-white">Creation du service</button>
                            </form>
                <?php
                        }
                    }
                }
                ?>

            </div>
        </div>

    </div>
</body>

</html>