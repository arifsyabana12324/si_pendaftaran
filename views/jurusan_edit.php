<?php
$id_jurusan=$_GET['id_jurusan'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_jurusan WHERE id_jurusan ='$id_jurusan'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Jurusan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="id_jurusan" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_jurusan" value="<?=$data['id_jurusan']?>"class="form-control" id="inputEmail3" placeholder="ID">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jurusan" value="<?=$data['jurusan']?>"class="form-control" id="inputEmail3" placeholder="Jurusan">
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Jurusan</button>
                            </div>
                        </div>       
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=jurusan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Jurusan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $id_jurusan=$_POST['id_jurusan'];
    $jurusan=$_POST['jurusan'];
    //buat sql
    $sql="UPDATE tb_jurusan SET id_jurusan='$id_jurusan',jurusan='$jurusan' WHERE id_jurusan ='$id_jurusan'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Jurusan Error");
    if ($query){
        echo "<script>window.location.assign('?page=jurusan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>
