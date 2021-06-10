<?php

include "koneksi.php";
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$param = [
    "user" => $Email,
    "pass" => $Password
];

$req = post_request('https://sinarilmu-api.herokuapp.com/login',$param);

if(!empty($req)){
    $data = json_decode($req, true);
    $_SESSION['user']['nama'] = $data["user"];
    $_SESSION['user']['id'] = $data['userId'];
    $_SESSION['user']['level'] = $data['level'];
    
    if($_SESSION["user"]["level"] == "admin")
        echo "
            <script>
                window.location.href = '../admin-user.php'
            </script>
        ";
    else 
    echo"
    <script>
        alert('Login Berhasil');
        location.href='../index.php';
    </script>";
    
}

else {
    echo"
    <script>
        alert('Email Atau Password Tidak Cocok');
       location.href='../loginpage.php';
    </script>";

}

?>