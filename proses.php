<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $NIK=$_POST['NIK'];
    $jenis_kendaraan=$_POST['jenis_kendaraan'];

    $sql = "INSERT INTO tb_bbm(NIK, jenis_kendaraan) VALUES ('$NIK', '$jenis_kendaraan')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location:tambah.php?status=sukses');
    }else{
        header('Location:tambah.php?status=gagal');
    }
}
?>