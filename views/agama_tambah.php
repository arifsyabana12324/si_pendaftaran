<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Agama</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="id_agama" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_agama" class="form-control" id="inputEmail3" placeholder="Inputkan ID Agama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> SIMPAN DATA AGAMA</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="panel-footer">
                    <a href="?page=agama&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Agama
                    </a>
                </div>
        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $id_agama=$_POST['id_agama'];
    $agama=$_POST['agama'];
    //buat sql
    $sql="INSERT INTO tb_agama VALUES ('$id_agama','$agama')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Agama Error");
    if ($query){
        echo "<script>window.location.assign('?page=agama&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>