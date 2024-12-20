<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] != '44' ) {

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background-image: url('img/chef-plating-a-nutritious-meal-in-a-bright-kitchen-fresh-ingredients-arranged-artistically-discussing-healthy-cooking-techniques-photo-transformed.jpeg');
            background-size: cover;
            background-position: center;
        }

    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="../Gestion-d-un-un-Chef-Cuisinier/index_client.php"><img width="80px" src="img/logo.png" alt="LOGO"></a>
            <div class="space-x-8 flex">
                <a href="../Gestion-d-un-un-Chef-Cuisinier/index_client_Aau.php" class="text-gray-700 hover:text-gray-900 transition">Home</a>
                <a href="../Gestion-d-un-un-Chef-Cuisinier/pages/menu_client_Aau.php" class="text-gray-700 hover:text-gray-900 transition">Menu</a>

                <!-- after enter  -->
                <div class="">
                <a href="../Gestion-d-un-un-Chef-Cuisinier/profiles/profile_user.php"><img width="25px" src="img/profile-major.svg" alt=""></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- burger ico  -->

    <!-- Hero Section -->
    <header class="hero-bg text-white h-screen flex items-center justify-center text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-5xl font-bold mb-6 animate-fade-in">Unique Experience</h1>
            <p class="text-xl mb-10 max-w-2xl mx-auto">Discover a personalized gastronomic adventure, prepared with passion and creativity by a starred chef.</p>
            <div class="space-x-4">
                <a href="../Gestion-d-un-un-Chef-Cuisinier/Pages/menu_client_Aau.php" class="bg-white text-gray-900 px-6 py-3 rounded-full hover:bg-gray-100 transition">Our Menus</a>
                <a href="#contact" class="border-2 border-white text-white px-6 py-3 rounded-full hover:bg-white hover:text-gray-900 transition">Contact us</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container mx-auto px-4 py-20 flex">
        <div class="grid md:grid-cols-2 gap-64 items-center ml-16">
            <div>
                <h2 class="text-4xl font-bold mb-6 text-gray-900">Our History</h2>
                <p class="text-gray-600 mb-4">
                Passionate about gastronomy since a young age, I traveled the world to perfect my culinary art. Every dish I prepare tells a story, mixes traditions and creative innovation.
                </p>
                <p class="text-gray-600 mb-6">
                My goal is to create unforgettable culinary experiences, transforming each meal into a unique sensory journey.
                </p>
                <div class="flex space-x-6">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900">10+</h3>
                        <p class="text-gray-600">Years of Experience</p>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900">100+</h3>
                        <p class="text-gray-600">Created Menus</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="img/lovepik-chefs-chef-picture_501000290-transformed.jpeg" alt="Chef Portrait" class="">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-100 py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 text-gray-900">Contact Us</h2>
                <p class="text-gray-600">Ready for a unique culinary experience? Contact us for more information or to book your personalized experience.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-8 max-w-2xl mx-auto">
                <form>
                    <div class="grid md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Nom" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300">
                        <input type="email" placeholder="Email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300">
                    </div>
                    <textarea placeholder="Votre Message" class="w-full p-3 border rounded-lg mt-6 h-32 focus:outline-none focus:ring-2 focus:ring-gray-300"></textarea>
                    <button type="submit" class="w-full bg-gray-900 text-white py-3 rounded-full mt-6 hover:bg-gray-700 transition">Envoyer</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <div class="mb-6">
                <h3 class="text-2xl font-bold">Chef</h3>
                <p class="text-gray-400 mt-2">Personalized Gourmet Cuisine</p>
            </div>
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
            <p class="text-gray-500">Chef. All rights reserved.</p>
        </div>
    </footer>
<?php } else {
    header('Location: ../index.php');
    exit();
}
?>
</body>
</html>