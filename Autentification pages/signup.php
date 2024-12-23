<?php
session_start();
include '../connection/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    
    if ($email == 'admin@gmail.com' && $_POST['password'] == 'admin') {
        $role = 'admin';
    } else {
        $role = 'Client';
    }

   
    $rolesql = "INSERT INTO role(titre) VALUES (?)";
    $rolestmt = mysqli_prepare($conn, $rolesql);
    mysqli_stmt_bind_param($rolestmt, "s", $role);
    mysqli_stmt_execute($rolestmt);

    
    $role_id = mysqli_insert_id($conn);

   
    $sql = "INSERT INTO clients(prenom, nom, email, mot_de_passe, role_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $password, $role_id);
    mysqli_stmt_execute($stmt);

    
    $sql_select = "SELECT * FROM clients WHERE email = ?";
    $select_stmt = mysqli_prepare($conn, $sql_select);
    mysqli_stmt_bind_param($select_stmt, "s", $email);
    mysqli_stmt_execute($select_stmt);
    $result = mysqli_stmt_get_result($select_stmt);

    while($client = mysqli_fetch_assoc($result)){
        $_SESSION['client_id'] = $clients['client_id'];
        $_SESSION['last_name'] = $clients['nom'];
        $_SESSION['first_name'] = $clients['prenom'];
        $_SESSION['email'] = $clients['email'];
        $_SESSION['role'] = $role;
    }
    
    
    
    if ($role == 'admin') {
        header('Location: ../Pages/dashboard.php');
    } else {
        header('Location: ../index_client_Aau.php');
    }
    exit();
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
                
                <form class="space-y-6" method="post">
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
                    <!-- <div>
                        <label for="password" class="block text-sm font-medium text-[var(--text-dark)] mb-2">
                            Role
                        </label>
                        <select 
                        name="select_role"
                        id="select_role"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--secondary)] transition duration-300"
                         required>
                            <option value="admin" selected disabled>Select A Role</option>
                            <option value="admin">Admin</option>
                            <option value="Client">Client</option>
                        </select>
                    </div> -->
                    <div>
                        <button 
                            type="submit" 
                            name="creatAcc"
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
<script src="../Scripts/signup-validation.js"></script>
</body>
</html>