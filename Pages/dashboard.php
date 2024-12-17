<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord du Chef</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen font-inter text-gray-800">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="Gestion-d-un-un-Chef-Cuisinier/index.php"><img width="80px" src="../img/logo.png" alt="LOGO"></a>
            <div class="space-x-8 flex">
                <a href="../index.php" class="text-gray-700 hover:text-gray-900 transition">Home</a>
                <a href="../Pages/menu.php" class="text-gray-700 hover:text-gray-900 transition">Menu</a>
                <a href="../Pages/dashboard.php" class="text-gray-700 hover:text-gray-900 transition">dashboard</a>
                <!-- sign up - log in  -->
                <div class="relative left-7 hidden">
                <a href="Autentification pages/login.php" class="bg-gray-900 text-white pr-12 px-4 py-2 rounded-full hover:bg-gray-700 transition">Sign up</a>
                <a href="Autentification pages/login.php" class="bg-gray-400 text-white px-4 py-2 rounded-full hover:bg-gray-500 transition relative right-12">Log in</a>
                </div>
                <!-- after enter  -->
                <div class="">
                <a href=""><img width="25px" src="../img/profile-major.svg" alt=""></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl pt-36">
        <header class="flex justify-between items-center mb-10 bg-white rounded-xl shadow-soft p-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
                <p class="text-gray-500">Welcome, Chef Mo7a</p>
            </div>
            <div class="flex items-center space-x-4">
            </div>
        </header>

        <div class="grid md:grid-cols-3 gap-6">
            
            <div class="bg-white rounded-xl shadow-soft p-6 space-y-4">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Reservations Statistics</h2>
                <div class="space-y-3">
                    <div class="flex justify-between items-center bg-blue-50 p-3 rounded-lg">
                        <span class="text-gray-600">Total Reservations</span>
                        <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full font-bold">3</span>
                    </div>
                    <div class="flex justify-between items-center bg-green-50 p-3 rounded-lg">
                        <span class="text-gray-600">Reservations Accepted</span>
                        <span class="bg-green-200 text-green-800 px-3 py-1 rounded-full font-bold">3</span>
                    </div>
                    <div class="flex justify-between items-center bg-red-50 p-3 rounded-lg">
                        <span class="text-gray-600">Reservations Refused</span>
                        <span class="bg-red-200 text-red-800 px-3 py-1 rounded-full font-bold">3</span>
                    </div>
                    <div class="flex justify-between items-center bg-yellow-50 p-3 rounded-lg">
                        <span class="text-gray-600">Pending Reservations</span>
                        <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full font-bold">3</span>
                    </div>
                </div>
            </div>

            
            <div class="bg-white rounded-xl shadow-soft p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Next Reservation</h2>
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="w-14 h-14 bg-blue-200 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Sophie Dupont</p>
                            <p class="text-sm text-gray-600">Tomorrow, 19:00 - 4 persone</p>
                            <div class="mt-2 flex space-x-2">
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs">Confirm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Clients -->
            <div class="bg-white rounded-xl shadow-soft p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Clients</h2>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="bg-purple-100 text-purple-800 p-4 rounded-lg">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-800">256</p>
                            <p class="text-sm text-gray-600">Total registered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gestion des Réservations -->
        <div class="mt-8 bg-white rounded-xl shadow-soft p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-700">Pending Reservations</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-600 uppercase">
                        <tr>
                            <th class="px-4 py-3 rounded-tl-lg">Client</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Hour</th>
                            <th class="px-4 py-3">Persone</th>
                            <th class="px-4 py-3 rounded-tr-lg">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="px-4 py-4">Omar Bourra</td>
                            <td class="px-4 py-4">15 chi chhar 2024</td>
                            <td class="px-4 py-4">19:00</td>
                            <td class="px-4 py-4">2</td>
                            <td class="px-4 py-4">
                                <div class="flex space-x-2">
                                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                                        Accept
                                    </button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                                        Refuse
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>