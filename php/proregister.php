<?php 
    include "/php/koneksi.php";
    
    $Username = $_POST['Username'];
    $Password = $Password['Password'];
    $NamaLengkap = $_POST['NamaLengkap'];
    $Email = $_POST['Email'];
    
    
    $sql = "INSERT INTO tbuser VALUES('','$Username','$Password','$NamaLengkap','$Alamat','$Telp','$Email','$Level','$Tarif','$NoMeter')"
    $query = mysqli_query($koneksi, $query);
    if($query){
        