<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] != '44' ) {
    $clientname = $_SESSION['last_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen font-inter text-gray-800">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="Gestion-d-un-un-Chef-Cuisinier/index.php"><img width="80px" src="../img/logo.png" alt="LOGO"></a>
            <div class="space-x-8 flex">
                <a href="../index_client_Aau.php" class="text-gray-700 hover:text-gray-900 transition">Home</a>
                <a href="../Pages/menu_client_Aau.php" class="text-gray-700 hover:text-gray-900 transition">Menu</a>
                <!-- sign up - log in  -->
                <div class="relative left-7 hidden">
                <a href="../Autentification pages/signup.php" class="bg-gray-900 text-white pr-12 px-4 py-2 rounded-full hover:bg-gray-700 transition">Sign up</a>
                <a href="../Autentification pages/login.php" class="bg-gray-400 text-white px-4 py-2 rounded-full hover:bg-gray-500 transition relative right-12">Log in</a>
                </div>
                <!-- after enter  -->
                <div class="">
                <a href=""><img width="25px" src="../img/profile-major.svg" alt=""></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-24">

        <div class="container mx-auto max-w-4xl px-4 py-8">
        
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            
            <div class="bg-gray-100 p-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">My Profile</h2>
                <div class="space-x-3 flex">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit Profile
                    </button>
                    <form action="../Pages/disconnect.php" method="POST">
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                                Disconnect
                            </button>
                    </form>
                </div>
            </div>

            
            <div class="h-48 bg-gray-600 bg-cover bg-center">
                
            </div>

           
            <div class="px-6 py-4 relative">
               
                <img width="150px" src="../img/profile-major.svg" alt="Chef Profil" class="absolute bottom-36 bg-white  left-1/2 transform -translate-x-1/2 rounded-full border-4 border-white shadow-lg">
                
               
                <div class="text-center pt-24">
                    <?php if(isset($_SESSION['first_name'], $_SESSION['last_name'])){ ?>
                    <h1 class="text-3xl font-bold text-gray-800">
                        <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?>
                    </h1>
                    <?php } ?>
                    <p class="text-gray-600 mt-2">Client</p>
                    <div class="mt-2 text-gray-500">
                        <span>CasaBlanca, Maroc</span>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="grid md:grid-cols-3 gap-6 mt-6">
            
            <div class="bg-white shadow-lg rounded-lg p-6 md:col-span-2 relative">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">About Me</h2>
                <p class="text-gray-600">
                love cooking!
                </p>
            </div>

            
            <div class="bg-white shadow-lg rounded-lg p-6 relative">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Achievement</h2>
                <p></p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 md:col-span-2 relative mt-4">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">My Reservations </h2>
<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-600">Menu Name</th>
                <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-600">Time</th>
                <th class="px-6 py-3 border-b text-left text-sm font-semibold text-gray-600">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../connection/conn.php';
            $nom = $_SESSION['last_name'];
            $sql = "SELECT r.*, c.nom AS clients_name, m.name AS menu_name 
                    FROM reservation r 
                    LEFT JOIN clients c ON c.client_id = r.client_id 
                    LEFT JOIN menus m ON m.menu_id = r.menu_id 
                    WHERE c.nom = '$nom'";

            $result = mysqli_query($conn, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                echo '<tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 border-b text-gray-800">'. $row['menu_name'] .'</td>
                        <td class="px-6 py-4 border-b text-gray-800">'. $row['date_reservation'] .'</td>
                        <td class="px-6 py-4 border-b">';
                            if($row['status'] == 'en_attente'){  
                            echo '<span class="px-2 py-1 text-sm rounded-full bg-yellow-100 text-yellow-800">Pending</span>';
                            } else if($row['status'] == 'acceptee'){
                            echo '<span class="px-2 py-1 text-sm rounded-full bg-green-100 text-green-800">Confirmed</span>';
                            } else if($row['status'] == 'refusee'){
                            echo '<span class="px-2 py-1 text-sm rounded-full bg-red-100 text-red-800">Refused</span>';
                            }
                     echo '</td>';
                     echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
</div>
        </div>
    </div>

<?php } else {
    header('Location: ../index.php');
    exit();
}
?>
</body>
</html>