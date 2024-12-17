<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Chef Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3A506B;
            --secondary: #5BC0EB;
            --accent: #9CEAEF;
            --background: #F7F7FF;
            --text-dark: #1C2541;
        }
    </style>
</head>
<body class="bg-[var(--background)] min-h-screen flex items-center justify-center font-manrope text-[var(--text-dark)] antialiased">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
            <div class="p-8">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-[var(--primary)] mb-2">Sign Up</h1>
                    <p class="text-gray-600">Create Your Account !</p>
                </div>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-[var(--text-dark)] mb-2">
                                First Name
                            </label>
                            <input 
                                type="text" 
                                id="first-name" 
                                name="first-name" 
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--secondary)] transition duration-300"
                                placeholder="Your First Name"
                            >
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-[var(--text-dark)] mb-2">
                                Last Name
                            </label>
                            <input 
                                type="text" 
                                id="last-name" 
                                name="last-name" 
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--secondary)] transition duration-300"
                                placeholder="Your Last Name"
                            >
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-[var(--text-dark)] mb-2">
                            E-mail
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--secondary)] transition duration-300"
                            placeholder="Your.email@exemple.com"
                        >
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-[var(--text-dark)] mb-2">
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--secondary)] transition duration-300"
                            placeholder="Password"
                        >
                        <p class="text-xs text-gray-600 mt-2">
                            Password must be more than 8 caracters!
                        </p>
                    </div>
                    <div>
                        <button 
                            type="submit" 
                            class="w-full bg-[var(--primary)] text-white py-3 rounded-lg hover:bg-gray-900 transition duration-300 shadow-md"
                        >
                            Create Account
                        </button>
                    </div>
                </form>
                
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        You have already an Account ?
                        <a href="../Autentification pages/login.php" class="text-[var(--secondary)] hover:text-[var(--primary)] transition duration-300">
                            Log in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>