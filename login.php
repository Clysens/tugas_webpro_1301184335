<?php
/* Fazainsyah Azka
NIM : 1301184335
Kelas : IF-42-11
*/
//untuk menyambungkan login ke instagram
    include "connect.php";
    $query_user = mysqli_query($conn, "SELECT * FROM user where username = '".$_POST["username"]."' and password = '".$_POST["password"]."'");
    $user = mysqli_fetch_assoc($query_user);
    $query_profile = mysqli_query($conn, "SELECT * FROM profile where username = '".$_POST["username"]."'");
    $profile = mysqli_fetch_assoc($query_profile);

    session_start();

    if (count($user) > 0){
        $_SESSION["user"] = $user;
        $_SESSION["profile"] = $profile;
        header('Location: profile.php');
    }else{
        header('Location: index.php');
    }
?>