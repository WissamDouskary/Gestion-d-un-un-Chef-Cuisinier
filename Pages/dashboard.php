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
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="flex justify-between items-center mb-10 bg-white rounded-xl shadow-soft p-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Tableau de Bord</h1>
                <p class="text-gray-500">Bienvenue, Chef Martin</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-gradient-to-r from-red-400 to-red-600 text-white px-5 py-2 rounded-lg shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
                    Déconnexion
                </button>
            </div>
        </header>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Réservations Statistiques -->
            <div class="bg-white rounded-xl shadow-soft p-6 space-y-4">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Statistiques des Réservations</h2>
                <div class="space-y-3">
                    <div class="flex justify-between items-center bg-blue-50 p-3 rounded-lg">
                        <span class="text-gray-600">Total des Réservations</span>
                        <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full font-bold">45</span>
                    </div>
                    <div class="flex justify-between items-center bg-green-50 p-3 rounded-lg">
                        <span class="text-gray-600">Réservations Acceptées</span>
                        <span class="bg-green-200 text-green-800 px-3 py-1 rounded-full font-bold">32</span>
                    </div>
                    <div class="flex justify-between items-center bg-red-50 p-3 rounded-lg">
                        <span class="text-gray-600">Réservations Refusées</span>
                        <span class="bg-red-200 text-red-800 px-3 py-1 rounded-full font-bold">8</span>
                    </div>
                    <div class="flex justify-between items-center bg-yellow-50 p-3 rounded-lg">
                        <span class="text-gray-600">Réservations en Attente</span>
                        <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full font-bold">5</span>
                    </div>
                </div>
            </div>

            <!-- Prochaine Réservation -->
            <div class="bg-white rounded-xl shadow-soft p-6">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Prochaine Réservation</h2>
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="w-14 h-14 bg-blue-200 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Sophie Dupont</p>
                            <p class="text-sm text-gray-600">Demain, 19:00 - 4 personnes</p>
                            <div class="mt-2 flex space-x-2">
                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs">Confirmé</span>
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
                            <p class="text-sm text-gray-600">Total inscrits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gestion des Réservations -->
        <div class="mt-8 bg-white rounded-xl shadow-soft p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-700">Réservations en Attente</h2>
                <button class="bg-gradient-to-r from-green-400 to-green-600 text-white px-5 py-2 rounded-lg shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
                    Générer Rapport PDF
                </button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-100 text-gray-600 uppercase">
                        <tr>
                            <th class="px-4 py-3 rounded-tl-lg">Client</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Heure</th>
                            <th class="px-4 py-3">Personnes</th>
                            <th class="px-4 py-3 rounded-tr-lg">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="px-4 py-4">Jean Dupont</td>
                            <td class="px-4 py-4">15 Décembre 2024</td>
                            <td class="px-4 py-4">19:00</td>
                            <td class="px-4 py-4">2</td>
                            <td class="px-4 py-4">
                                <div class="flex space-x-2">
                                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                                        Accepter
                                    </button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                                        Refuser
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