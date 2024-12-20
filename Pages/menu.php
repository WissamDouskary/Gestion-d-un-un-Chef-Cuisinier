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
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="Gestion-d-un-un-Chef-Cuisinier/index.php"><img width="80px" src="../img/logo.png" alt="LOGO"></a>
            <div class="space-x-8 flex">
                <a href="../index.php" class="text-gray-700 hover:text-gray-900 transition">Home</a>
                <a href="../Pages/menu.php" class="text-gray-700 hover:text-gray-900 transition">Menu</a>
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

    <!-- Menu Header -->
    <header id="menuhead" class="text-white pb-16 text-center pt-44 flex flex-col justify-center items-center">
        <span class="text-4xl font-bold mb-8 bg-gray-900 bg-opacity-70 p-2 rounded-xl">Our Menu</span>
        <span class="text-xl text-white font-bold max-w-2xl mx-auto mt-6 ">Discover a unique selection of menus created with passion, using the best seasonal ingredients.</span>
        
    </header>

    <!-- Menu Cards Section -->
    
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl mb-8 font-bold text-gray-900">Availlable Menus :</h2>
        <div class="grid md:grid-cols-3 gap-8">
            

        <?php 
        include '../connection/conn.php';

        $sql = "SELECT * FROM menus";
        $result = mysqli_query($conn, $sql);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                echo '<div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:scale-105 hover:shadow-2xl">
                <img src="'. $row['menu_image_url'] . '" alt="1 photo" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-3 text-gray-900">'. $row['name'] .'</h2>
                    <p class="text-gray-600 mb-4">
                        '. $row['description'] .'
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-gray-900">'. $row['price'] .'$</span>
                        <a href="../Pages/reservation.php?menu_id='. $row['menu_id'] . '">
                        <button class="bg-gray-900 text-white px-5 py-2 rounded-full hover:bg-gray-700 transition">
                            Reserve
                        </button>
                        </a>
                    </div>
                    <div class="mt-4 flex items-center text-gray-500">
                        <i class="fas fa-utensils mr-2"></i>
                        
                        <span class="mx-2">•</span>
                        <i class="far fa-clock mr-2"></i>
                        <span>'. $row['date_added'] .'</span>
                    </div>
                </div>
            </div>';
            }
        }
        
        
        ?> 
        </div>
    </section>

    <!-- Booking Information Section -->
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
</body>
</html>