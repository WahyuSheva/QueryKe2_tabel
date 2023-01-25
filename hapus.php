<?php
//------------koneksi---------------------//
include("koneksi.php");
//---------------------------------------//
$id = $_GET['id'];
//--------query------------------------//
$sql= "DELETE FROM tb_jurusan where id_jurusan=$id";
$query = mysqli_query($koneksi, $sql);
//---------------------------------------------------//
$sql= "DELETE FROM tb_spp1 where id_spp1=$id";
$query = mysqli_query($koneksi, $sql);
//-------------------------------------------------//
$sql= "DELETE FROM tb_siswa where id_siswa=$id";
$query = mysqli_query($koneksi, $sql);
//------------------------------------------------//
if($query){
    header("Location:join-table.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>