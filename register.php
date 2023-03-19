<?php
session_start();
if (isset($_SESSION['auth'])) {
	$_SESSION['message'] = "Vous etes deja connecté";
	header("Location: index.php");
	exit(0);
  }
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
<!-- component -->

<body class="font-mono bg-gray-400">
	<!-- Container -->
	<div class="container mx-auto">
		<div class="flex justify-center px-6 my-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
					
					<h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
					<?php include('message.php');
						?>
					<form action="saveuser.php" method="post" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
						
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
									First Name
								</label>
								<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" type="text" name="nom" placeholder="Nom Complet" />
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="Email">
									Email
								</label>
								<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Email" />
							</div>
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="adresse">
									Adresse
								</label>
								<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="adresse" type="text" name="adresse" placeholder="Adresse" />
							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="Phone">
									Numéro de téléphone
								</label>
								<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="phone" type="text" name="telephone" placeholder="Numéro de téléphone" />
							</div>
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
									Password
								</label>
								<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************" />

							</div>
							<div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
									Confirm Password
								</label>
								<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="password" name="c_password" placeholder="******************" />
							</div>
						</div>
						<div class="mb-6 text-center">
							<button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit" name="submit">
								Register Account
							</button>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="#">
								Forgot Password?
							</a>
						</div>
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="login.php">
								Already have an account? Login!
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>