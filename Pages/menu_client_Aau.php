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
                <a href="../index_client_Aau.php" class="text-gray-700 hover:text-gray-900 transition">Home</a>
                <a href="../Pages/menu_client_Aau.php" class="text-gray-700 hover:text-gray-900 transition">Menu</a>
                
                <!-- after enter  -->
                <div class="">
                <a href="../profiles/profile_user.php"><img width="25px" src="../img/profile-major.svg" alt=""></a>
                </div>
            </div>
        </div>
    </nav>

   
    <header id="menuhead" class="text-white pb-16 text-center pt-44 flex flex-col justify-center items-center">
        <span class="text-4xl font-bold mb-8 bg-gray-900 bg-opacity-70 p-2 rounded-xl">Our Menu</span>
        <span class="text-xl text-white font-bold max-w-2xl mx-auto mt-6 ">Discover a unique selection of menus created with passion, using the best seasonal ingredients.</span>
        
    </header>

    
    
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl mb-8 font-bold text-gray-900">Availlable Menus :</h2>
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

           
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:scale-105 hover:shadow-2xl">
                <img src="/api/placeholder/400/300" alt="2 photo" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-3 text-gray-900">tanya</h2>
                    <p class="text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusamus ullam magnam illo similique iste nostrum cupiditate consequuntur sit veritatis voluptatem totam, a expedita provident non quam voluptas facere aliquam!
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-gray-900">105€</span>
                        <button class="bg-gray-900 text-white px-5 py-2 rounded-full hover:bg-gray-700 transition">
                            Reserve
                        </button>
                    </div>
                    <div class="mt-4 flex items-center text-gray-500">
                        <i class="fas fa-utensils mr-2"></i>
                        <span>6 Plats</span>
                        <span class="mx-2">•</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>3h00</span>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:scale-105 hover:shadow-2xl">
                <img src="/api/placeholder/400/300" alt="3 photo" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-3 text-gray-900">hadik</h2>
                    <p class="text-gray-600 mb-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit libero minima dicta eum nesciunt eos tempora voluptatibus molestias et, sunt vitae vero qui quae dolor quibusdam porro in aut fugit!
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-gray-900">129€</span>
                        <button class="bg-gray-900 text-white px-5 py-2 rounded-full hover:bg-gray-700 transition">
                            Reserve
                        </button>
                    </div>
                    <div class="mt-4 flex items-center text-gray-500">
                        <i class="fas fa-utensils mr-2"></i>
                        <span>7 Plats</span>
                        <span class="mx-2">•</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>3h30</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Reservation Information</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
            Each menu can be adapted to your dietary preferences. Please do not hesitate to contact us for special requests or allergies.
            </p>
            <a href="#" class="bg-gray-900 text-white px-8 py-3 rounded-full hover:bg-gray-700 transition">
            Contact us
            </a>
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