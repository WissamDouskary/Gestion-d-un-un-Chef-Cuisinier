<?php 
session_start();
include '../connection/conn.php';

if(isset($_GET['resId'])){
    $reservationId = $_GET['resId'];
    $sql = "UPDATE reservation
    SET status = 'refusee'
    WHERE status = 'en_attente' OR status = 'acceptee' AND reservation_id = $reservationId;";
    $stmt = mysqli_query($conn, $sql);

    if($stmt){
        echo "<script>
        window.location.href = '../Pages/dashboard.php';
                </script>";
    }
}


?>