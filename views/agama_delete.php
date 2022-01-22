<?php
//membuat query untuk hapus data
$sql="DELETE FROM tb_agama WHERE id_agama ='".$_GET['id_agama']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=agama&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=agama&actions=tampil');</scripr>";
}

