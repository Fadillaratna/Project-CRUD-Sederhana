<?php 
    include "connection.php";
    $id=$_GET['id'];
    $today = null;
    $result = $conn -> query('update siswa set kehadiran = "' . $today . '" where id = "' . $id . '"');

    if (!$result){
        var_dump($conn->query);
        exit();
    }

    header('Location: index.php')
?>