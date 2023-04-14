<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetailService</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="w-full h-auto py-14 flex items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('img/fond1.webp');">
        <div class="w-full md:max-w-4xl space-y-8">
            <h1 class="text-4xl lg:text-6xl font-bold text-center text-white">Béneficiez de nos services et renseignements</h1>
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
    <?php include("footer.php") ?>
</body>
</html>