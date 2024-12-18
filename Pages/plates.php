<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>
        #menuhead{
            background-image: url(../img/menuphoto.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>


<body class="bg-gray-50 text-gray-800">
    
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="../index_client.php"><img width="80px" src="../img/logo.png" alt="LOGO"></a>
            <div class="space-x-8 flex">
                <a href="../index_client.php" class="text-gray-700 hover:text-gray-900 transition">Home</a>
                <a href="../Pages/menu_client.php" class="text-gray-700 hover:text-gray-900 transition">Menu</a>
                <!-- sign up - log in  -->
                <div class="relative left-7 ">
                <a href="../Autentification pages/signup.php" class="bg-gray-900 text-white pr-12 px-4 py-2 rounded-full hover:bg-gray-700 transition">Sign up</a>
                <a href="../Autentification pages/login.php" class="bg-gray-400 text-white px-4 py-2 rounded-full hover:bg-gray-500 transition relative right-12">Log in</a>
                </div>
                <!-- after enter  -->
                <div class="hidden">
                <a href=""><img width="25px" src="img/profile-major.svg" alt=""></a>
                </div>
            </div>
        </div>
    </nav>

   
    <header id="menuhead" class="text-white pb-16 text-center pt-44 flex flex-col justify-center items-center">
        <span class="text-4xl font-bold mb-8 bg-gray-900 bg-opacity-70 p-2 rounded-xl">Our Menu</span>
        <span class="text-xl text-white font-bold max-w-2xl mx-auto mt-6 ">Discover a unique selection of menus created with passion, using the best seasonal ingredients.</span>
        
    </header>

    
    
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl mb-8 font-bold text-gray-900">Availlable PLates :</h2>
        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:scale-105 hover:shadow-2xl">
                <img src="/api/placeholder/400/300" alt="1 photo" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-3 text-gray-900">first one</h2>
                    <p class="text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti veritatis alias nam voluptatibus dolore doloribus illum soluta. Quo quasi similique fugiat ipsam? Rerum beatae sunt laudantium, dolore laborum odio dolorem.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-gray-900">89€</span>
                        <button class="bg-gray-900 text-white px-5 py-2 rounded-full hover:bg-gray-700 transition">
                            Reserve
                        </button>
                    </div>
                    <div class="mt-4 flex items-center text-gray-500">
                        <i class="fas fa-utensils mr-2"></i>
                        <span>5 Plats</span>
                        <span class="mx-2">•</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>2h30</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <div class="mb-6">
                <h3 class="text-2xl font-bold">Chef </h3>
                <p class="text-gray-400 mt-2">Personalized Gourmet Cuisine</p>
            </div>
            <p class="text-gray-500">Chef . All rights reserved.</p>
        </div>
    </footer>

    <script src="../Scripts/script.js"></script>
</body>
</html>