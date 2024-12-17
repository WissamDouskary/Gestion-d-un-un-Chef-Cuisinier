<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Menus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-gray-900">Chef Expérience</div>
            <div class="space-x-6">
                <a href="index.php" class="text-gray-700 hover:text-gray-900 transition">Accueil</a>
                <a href="Gestion-d-un-un-Chef-Cuisinier/menu.php" class="text-gray-700 hover:text-gray-900 transition">Menu</a>
            </div>
        </div>
    </nav>

    <!-- Menu Header -->
    <header class="bg-gray-900 text-white pt-24 pb-16 text-center">
        <h1 class="text-4xl font-bold mb-4">Nos Menu</h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">Découvrez une sélection unique de menus créés avec passion, utilisant les meilleurs ingrédients de saison.</p>
    </header>

    <!-- Menu Cards Section -->
    <section class="container mx-auto px-4 py-16">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Menu Card 1: Dégustation Classique -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:scale-105 hover:shadow-2xl">
                <img src="/api/placeholder/400/300" alt="Menu Dégustation" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-3 text-gray-900">Dégustation Classique</h2>
                    <p class="text-gray-600 mb-4">
                        Un voyage culinaire à travers les classiques revisités, mettant en valeur les techniques traditionnelles françaises avec une touche moderne.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-gray-900">89€</span>
                        <button class="bg-gray-900 text-white px-5 py-2 rounded-full hover:bg-gray-700 transition">
                            Réserver
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

            <!-- Menu Card 2: Voyage Méditerranéen -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:scale-105 hover:shadow-2xl">
                <img src="/api/placeholder/400/300" alt="Menu Méditerranéen" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-3 text-gray-900">Voyage Méditerranéen</h2>
                    <p class="text-gray-600 mb-4">
                        Un parcours gustatif à travers les saveurs ensoleillées de la Méditerranée, avec des produits frais et des techniques de cuisson innovantes.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-gray-900">105€</span>
                        <button class="bg-gray-900 text-white px-5 py-2 rounded-full hover:bg-gray-700 transition">
                            Réserver
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

            <!-- Menu Card 3: Création du Chef -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:scale-105 hover:shadow-2xl">
                <img src="/api/placeholder/400/300" alt="Création du Chef" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-3 text-gray-900">Création du Chef</h2>
                    <p class="text-gray-600 mb-4">
                        Un menu entièrement personnalisé et surprenant, reflétant la créativité et l'inspiration du moment, avec des techniques de cuisine d'avant-garde.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-bold text-gray-900">129€</span>
                        <button class="bg-gray-900 text-white px-5 py-2 rounded-full hover:bg-gray-700 transition">
                            Réserver
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

    <!-- Booking Information Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Informations de Réservation</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Chaque menu peut être adapté à vos préférences alimentaires. N'hésitez pas à nous contacter pour des demandes spéciales ou des allergies.
            </p>
            <a href="#" class="bg-gray-900 text-white px-8 py-3 rounded-full hover:bg-gray-700 transition">
                Contactez-nous
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <div class="mb-6">
                <h3 class="text-2xl font-bold">Chef Expérience</h3>
                <p class="text-gray-400 mt-2">Cuisine Gastronomique Personnalisée</p>
            </div>
            <p class="text-gray-500">&copy; 2024 Chef Expérience. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>