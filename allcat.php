<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allcat</title>
</head>

<body class="bg-indigo-100">
    <?php include("navbar.php") ?>
    <div class="w-full h-auto py-14 flex items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('img/online.webp');">
        <div class="w-full md:max-w-4xl space-y-8">
            <h1 class="text-4xl lg:text-6xl font-bold text-center text-white">Trouvez la catégorie de votre choix en un clic</h1>
            <div class="w-5/6  md:max-w-2xl lg:max-w-xl mx-auto">
                <form action="allcat.php" method="get" class="w-full flex justify-center relative rounded-full overflow-hidden">
                    <input type="text" autocomplete="off" name="search" placeholder="Entrez votre recherche ici..." class="w-5/6  px-3 py-4  bg-white  focus:outline-none border-none">
                    <button type="submit" name="submit" class="w-1/6 py-4 flex items-center justify-center bg-orange-600 hover:bg-orange-700 text-white overflow-hidden rounded-r-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                    </button>
                </form>

                </button>
            </div>
        </div>
    </div>
    <div class="w-full container sm:max-w-full  mx-auto px-4 space-y-8 py-4">
        <div class="grid grid-cols-2 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-12 grid-flow-row gap-4">

            <?php
             $req = $connect->query("SELECT * FROM categorie");
            if (isset($_GET['submit']) && !empty($_GET['search'])) {
                $all= htmlspecialchars($_GET['search']);
                $req=$connect->query("SELECT * FROM categorie WHERE nom LIKE '%".$all."%'");
            }
            
            if ($req->rowCount() > 0) {
                while ($result = $req->fetch()) { ?>
                    <div class="col-span-2 sm:col-span-3 md:col-span-4 lg:col-span-4 group overflow-hidden h-[360px]  rounded-lg  relative cursor-pointer">
                        <div class="w-full h-full absolute group-hover:bg-opacity-60 duration-300 group-hover:bg-black">
                            <div class=" w-full h-full relative">
                                <div class="absolute bottom-4 w-full px-4 py-2 space-y-4">
                                    <p class="invible text-transparent  group-hover:visible group-hover:text-white text-base"><?php echo $result['nom']; ?></p>
                                    <a href="resultat.php?id=<?php echo $result['cat_id']; ?>" class="invible text-transparent  group-hover:visible group-hover:text-white text-base">see more</a>
                                </div>
                            </div>

                        </div>
                        <img src="<?php echo $result['image']; ?>" class="w-full h-full object-cover object-center" alt="">

                    </div>
            <?php
                }
            }else {
                echo"<p class='text-center text-sm text-red-600'>Aucun resultat trouvé !!</p>";
            }
            ?>


        </div>


    </div>
    <?php include("footer.php") ?>
</body>

</html>