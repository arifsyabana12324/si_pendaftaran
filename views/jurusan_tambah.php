<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Jurusan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="id_jurusan" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_jurusan" class="form-control" id="inputEmail3" placeholder="Inputkan ID Jurusan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jurusan" class="form-control" id="inputEmail3" placeholder="Inputkan Jurusan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> SIMPAN DATA JURUSAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="panel-footer">
                    <a href="?page=jurusan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Jurusan
                    </a>
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
    $sql="INSERT INTO tb_jurusan VALUES ('$id_jurusan','$jurusan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Jurusan Error");
    if ($query){
        echo "<script>window.location.assign('?page=jurusan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>