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
    <div class = "fixed w-full z-30 flex bg-white dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-10">
        <div class = "logo ml-12 dark:text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
            TABLEAU DE BORD
        </div>
        <!-- SPACER -->
        <div class = "grow h-full flex items-center justify-center"></div>
        <div class = "flex-none h-full text-center flex items-center justify-center">
            
                <div class = "flex space-x-3 items-center px-3">
                    <div class = "flex-none flex justify-center">
                    <div class="w-8 h-8 flex ">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShta_GXR2xdnsxSzj_GTcJHcNykjVKrCBrZ9qouUl0usuJWG2Rpr_PbTDu3sA9auNUH64&usqp=CAU" alt="profile" class="shadow rounded-full object-cover" />
                    </div>
                    </div>

                    <div class = "hidden md:block text-sm md:text-md text-black dark:text-white">
                        <?php 
                             if (isset($_SESSION['auth_user'])) {?>
                                  <span><?php echo $_SESSION['auth_user']['user_name'];?></span>
                             <?php 
                             }
                        ?>
                    </div>
                </div>
                
        </div>
    </div>
</body>
</html>