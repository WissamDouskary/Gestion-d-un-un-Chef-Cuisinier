<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Chef Dashboard</title>
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
                    <h1 class="text-3xl font-bold text-[var(--primary)] mb-2">Log In</h1>
                    <p class="text-gray-600">Enter To Your World!</p>
                </div>
                
                <form class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-[var(--text-dark)] mb-2">
                            E-mail
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2"
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
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2"
                            placeholder="Your Password"
                        >
                    </div>
                    
                    <div class="flex items-center justify-end">
                        <div>
                            <a href="#" class="text-sm text-[var(--secondary)] hover:text-[var(--primary)] transition duration-300">
                                Forget Your Password?
                            </a>
                        </div>
                    </div>
                    
                    <div>
                        <button 
                            type="submit" 
                            class="w-full bg-[var(--primary)] text-white py-3 rounded-lg hover:bg-gray-900 transition duration-300 shadow-md"
                        >
                            Se Connecter
                        </button>
                    </div>
                </form>
                
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Your dont have an account? 
                        <a href="../Autentification pages/signup.php" class="text-[var(--secondary)] hover:text-[var(--primary)] transition duration-300">
                            Sign Up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>