<?php 
session_start();
if (isset($_SESSION['auth'])) {
  if (!isset($_SESSION['message'])) {
    $_SESSION['message'] = "Vous etes deja connecté";
  }
  header("Location: index.php");
  exit(0);
}
 include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>connexion au site</title>
</head>
<body>
    <!-- component -->
<div class="relative flex  min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-cover bg-center bg-no-repeat bg-[url('/img/elegance.png')] py-6 sm:py-12">
<svg xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 -z-20" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,32L48,48C96,64,192,96,288,128C384,160,480,192,576,197.3C672,203,768,181,864,165.3C960,149,1056,139,1152,138.7C1248,139,1344,149,1392,154.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<div class="relative py-3 sm:w-96 mx-auto text-center">
     <?php include('message.php'); ?>
    <span class="text-2xl font-light ">Login to your account</span>
    <div class="mt-4 bg-white shadow-md rounded-lg text-left">
      <div class="h-2 bg-gray-800 rounded-t-md"></div>
      
      <form action="logindb.php" method="post">
        
      <div class="px-8 py-6 ">
        <label class="block font-semibold"> UserEmail  </label>
        <input type="email" name="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-gray-800 focus:ring-1 rounded-md">
        <label class="block mt-3 font-semibold"> Password </label>
        <input type="password" name="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-gary-800 focus:ring-1 rounded-md">
          <div class="flex justify-between items-baseline">
            <button type="submit" name="submit" class="mt-4 bg-gray-800 text-white py-2 px-6 rounded-md hover:bg-gray-900 ">Login</button>
            <a href="#" class="text-sm hover:underline">Forgot password?</a>
          </div>
      </div>
      </form>
  </div>
</div>
</body>
</html>

