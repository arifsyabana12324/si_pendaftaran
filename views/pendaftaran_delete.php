<?php
//membuat query untuk hapus data
$sql="DELETE FROM tb_daftar WHERE no_daftar ='".$_GET['no_daftar']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=pendaftaran&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=pendaftaran&actions=tampil');</scripr>";
}

