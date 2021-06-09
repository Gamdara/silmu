<?php 
    include "koneksi.php";
    session_destroy();
    echo"
    <script>
        alert('Berhasil Logout');
       location.href='../index.php';
    </script>";
?>