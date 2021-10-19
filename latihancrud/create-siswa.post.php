<?php

    include './connection.php';

    $name = $_POST['name'];
    $address = $_POST['address'];
    $school = $_POST['school'];
    $major = $_POST['major'];
    $age = $_POST['age'];

    $sql = "
        insert into siswa (name, address, school, major, age)
        values ('" . $name . "', '" . $address . "', '" .$school ."', '" . $major ."', '" . $age . "');
    ";

    $result = mysqli_query($conn, $sql);
    if($result){
        header('Location: index.php');
    }else{
        printf('Failed create student: ' . mysqli_error($conn));
        exit();
    }
?>