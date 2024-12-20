<?php
session_start();
include '../connection/conn.php';


if (!isset($_SESSION['client_id'])) {
    
    header('Location: ../Autentification pages/login.php');
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $client_id = $_SESSION['client_id'];
    $menu_id = $_POST['menu_id'];
    $date_reservation = $_POST['date_reservation'];
    
    
    if (empty($menu_id) || empty($date_reservation)) {
        
        header('Location: ../Pages/reservation.php?menu_id=' . $menu_id);
        exit();
    }

    
    $sql = "INSERT INTO reservation (client_id, menu_id, date_reservation, status) 
            VALUES ('$client_id', '$menu_id', '$date_reservation', 'en_attente')";
    
    if (mysqli_query($conn, $sql)) {
        
        header('Location: ../Pages/menu.php');
    } else {
        
        header('Location: ../Pages/reservation.php?menu_id=' . $menu_id);
    }
    exit();
}


header('Location: ../Pages/menu.php');
mysqli_close($conn);
?>