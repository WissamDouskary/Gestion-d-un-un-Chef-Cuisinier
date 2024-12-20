<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Reservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>
        #reservationhead {
            background-image: url(../img/reservationphoto.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md shadow-sm top-0">
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

    
    <section class="container mx-auto px-4 py-16 mt-20">
       
        <?php
        include '../connection/conn.php';
        
        if(isset($_GET['menu_id'])) {
            $menu_id = $_GET['menu_id'];
            
            
            $menu_sql = "SELECT * FROM menus WHERE menu_id = $menu_id";
            $menu_result = mysqli_query($conn, $menu_sql);
            $menu = mysqli_fetch_assoc($menu_result);
            
            if($menu) {
                echo '<div class="mb-12">
                    <h1 class="text-3xl font-bold mb-4">' . $menu['name'] . '</h1>
                    <p class="text-gray-600 mb-4">' . $menu['description'] . '</p>
                    <div class="flex items-center gap-4">
                        <span class="text-2xl font-bold text-gray-900">' . $menu['price'] . '€</span>
                        <span class="text-gray-500"><i class="far fa-clock mr-2"></i>' . $menu['date_added'] . '</span>
                    </div>';
                
                if($menu['menu_image_url']) {
                    echo '<img src="' . $menu['menu_image_url'] . '" alt="' . $menu['name'] . '" class="w-full h-64 object-cover rounded-xl mt-6">';
                }
                echo '</div>';
                
        
                $plats_sql = "SELECT p.* FROM plats p 
                             INNER JOIN menu_plats mp ON p.plate_id = mp.plate_id 
                             WHERE mp.menu_id = $menu_id";
                $plats_result = mysqli_query($conn, $plats_sql);
                
                echo '<div class="grid md:grid-cols-2 gap-8">';
                
                while($plat = mysqli_fetch_assoc($plats_result)) {
                    echo '<div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-start gap-4">
                            <div class="w-1/3">';
                    if($plat['plats_image']) {
                        echo '<img src="' . $plat['plats_image'] . '" alt="' . $plat['title'] . '" class="w-full rounded-lg object-cover">';
                    } else {
                        echo '<img src="/api/placeholder/200/150" alt="' . $plat['title'] . '" class="w-full rounded-lg object-cover">';
                    }
                    echo '</div>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold mb-2">' . $plat['title'] . '</h3>
                                <p class="text-gray-600 mb-4">' . $plat['description'] . '</p>
                                <span class="text-gray-900 font-semibold">' . $plat['price'] . '€</span>
                            </div>
                        </div>
                    </div>';
                }
                
                echo '</div>';
                
                
                if(isset($_SESSION['role']) && $_SESSION['role'] != '44' ) {
                    echo '<div class="mt-12 bg-white rounded-xl shadow-lg p-8 max-w-2xl mx-auto">
                        <h2 class="text-2xl font-bold mb-6">Make a Reservation</h2>
                        <form action="../Pages/process_reservation.php" method="POST">
                            <input type="hidden" name="menu_id" value="' . $menu_id . '">
                            <input type="hidden" name="client_id" value="' . $_SESSION['client_id'] . '">
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-gray-700 mb-2">Reservation Date</label>
                                    <input type="datetime-local" name="date_reservation" required 
                                           class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-gray-900">
                                </div>
                                <button type="submit" class="w-full bg-gray-900 text-white py-3 rounded-full hover:bg-gray-700 transition">
                                    Submit Reservation
                                </button>
                            </div>
                        </form>
                    </div>';
                } else {
                    echo '<div class="mt-12 text-center">
                        <p class="text-gray-600 mb-4">Please log in to make a reservation</p>
                        <a href="../Autentification pages/login.php" class="bg-gray-900 text-white px-8 py-3 rounded-full hover:bg-gray-700 transition">
                            Log in
                        </a>
                    </div>';
                }
            } else {
                echo '<p class="text-center text-gray-600">Menu not found.</p>';
            }
        } else {
            echo '<p class="text-center text-gray-600">No menu selected.</p>';
        }
        ?>
    </section>
    

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <div class="mb-6">
                <h3 class="text-2xl font-bold">Chef</h3>
                <p class="text-gray-400 mt-2">Personalized Gourmet Cuisine</p>
            </div>
            <p class="text-gray-500">Chef © All rights reserved.</p>
        </div>
    </footer>

</body>
</html>