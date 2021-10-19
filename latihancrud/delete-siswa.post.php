<?php
    include './connection.php' ;

    $id = $_GET['id'];

    $sql = "
        delete from siswa
        where id = '" . $id . "';
    ";

    $result = mysqli_query($conn, $sql);
    if($result) {
        header('Location: index.php');
    }else{
        printf('Failed delete student: ' . mysqli_error($conn));
        exit();
    }
?>