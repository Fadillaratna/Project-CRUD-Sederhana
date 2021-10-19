<?php
    include './connection.php';    

    $id = $_GET['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $school = $_POST['school'];
    $major = $_POST['major'];
    $age = $_POST['age'];

    $sql = "
        update siswa set name = '" . $name . "', address = '" . $address . "', school = '" . $school . "', major = '" . $major . "', age = '" . $age . "'
        where id = '" . $id . "';
    ";

    $result = mysqli_query($conn, $sql);
    if($result) {
        header('Location: index.php');
    }else{
        printf('Failed update student: ' . mysqli_error($conn));
        exit();
    }
?>