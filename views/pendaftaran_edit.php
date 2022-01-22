<?php
$no_daftar=$_GET['no_daftar'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE no_daftar='$no_daftar'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pendaftaran Mahasiswa/i Baru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_daftar" class="col-sm-3 control-label">No Pendaftaran</label>
                             <div class="col-sm-9">
								<input type="text" name="no_daftar" value="<?=$data['no_daftar']?>"class="form-control" id="inputEmail3" placeholder="No Pendaftaran" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_maba" class="col-sm-3 control-label">Nama Mahasiswa Baru</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_maba" value="<?=$data['nama_maba']?>"class="form-control" id="inputEmail3" placeholder="Nama Mahasiswa Baru">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" class="form-control">
                            </div>
                        </div> 
						
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah" class="col-sm-3 control-label">Asal Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal_sekolah" value="<?=$data['asal_sekolah']?>" class="form-control" id="inputPassword3" placeholder="Asal Sekolah">
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="nim_sekolah" class="col-sm-3 control-label">Nim Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nim_sekolah" value="<?=$data['nim_sekolah']?>"class="form-control" id="inputEmail3" placeholder="Nim Sekolah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jurusan" class="form-control">
                                    <option value="">--Pilih Jurusan--</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Sistem Komputer">Sistem Komputer</option>
                                    <option value="Sistem Informasi">Teknik Informatika</option>
                                    <option value="Sistem Komputer">Teknik Komputer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="agama" class="form-control">
                                    <option value="">--Pilih Agama--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katholik">Kristen Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="inputEmail3" placeholder="No Hp">
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?=$data['email']?>"class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pendaftaran</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pendaftaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pendaftaran
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_daftar=$_POST['no_daftar'];
	$nama_maba=$_POST['nama_maba'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
    $tempat_lahir=$_POST['tempat_lahir'];
	$tgl_lahir=$_POST['tgl_lahir'];
    $alamat=$_POST['alamat'];
    $asal_sekolah=$_POST['asal_sekolah'];
    $nim_sekolah=$_POST['nim_sekolah'];
    $jurusan=$_POST['jurusan'];
    $agama=$_POST['agama'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];
    //buat sql
    $sql="UPDATE tb_daftar SET no_daftar = '$no_daftar', nama_maba='$nama_maba', tempat_lahir = '$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', asal_sekolah='$asal_sekolah', nim_sekolah = '$nim_sekolah', jurusan = '$jurusan', agama = '$agama', no_hp = '$no_hp', email='$email' WHERE no_daftar='$no_daftar'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Pendaftaran Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendaftaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



