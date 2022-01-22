<?php
//membuat query untuk hapus data
$sql="DELETE FROM tb_jurusan WHERE id_jurusan ='".$_GET['id_jurusan']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=jurusan&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=jurusan&actions=tampil');</scripr>";
}
