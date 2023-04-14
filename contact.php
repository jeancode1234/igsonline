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
    <title>Document</title>
</head>
<body>
    <?php include('navbar.php');?>
  
      <div class="w-full  container mx-auto px-4 md:px-0 py-8 space-y-8">
            <h1 class="text-4xl lg:text-6xl text-gray-900 font-bold text-center">Need Some Help</h1>
            <p class="text-sm lg:text-lg text-gray-800 text-center font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident expedita sequi nisi aliquam dolorum nemo praesentium minima, dicta cum labore perferendis! Quia veniam necessitatibus laboriosam perferendis excepturi tenetur quam voluptatem.</p>
              
             <div class="w-full md:w-5/6 lg:w-2/4 bg-gray-200 rounded-2xl p-4 md:p-8 space-y-4 shadow-2xl">
                <h1 class="text-4xl font-bold text-gray-800">Contact us</h1>
                  <div class="w-full flex space-x-4">
                      <input type="text" name="name" class="w-1/2 focus:outline-none p-4 border-none rounded bg-slate-100 " placeholder="First Name">
                       <select name="produit" class="w-1/2 focus:outline-none p-4 border-none rounded bg-slate-100 " id="">
                        <option value="" disabled>select your products</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                       </select>
                    </div>
                  <div class="w-full flex space-x-4">
                      <input type="text" name="phone" class="w-1/2 p-4 focus:outline-none border-none rounded bg-slate-100 " placeholder="Phone Number">
                      <input type="email" name="email" class="w-1/2 p-4 focus:outline-none border-none rounded bg-slate-100 " placeholder="Email ">
                  </div>
                  <div class="w-full ">
                     <textarea name="message" id="" class="w-full h-64 p-4 focus:outline-none border-none rounded bg-slate-100 " placeholder="What can we help with you? "></textarea>
                  </div>
                  <div class="w-full flex justify-center">
                        <button type="submit"  class="w-full h-12 flex items-center justify-center bg-gray-800 hover:bg-gray-900 text-white rounded">Submit Now</button>
                  </div>
             </div>
      </div>
   <?php include("footer.php"); ?>
</body>
</html>