<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pendaftaran Mahasiswa/i Baru</h3>
                </div>
                        <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_daftar" class="col-sm-3 control-label">No Pendaftaran</label>
                             <div class="col-sm-9">
                                <input type="text" name="no_daftar" class="form-control" id="inputEmail3" placeholder="No Pendaftaran" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_maba" class="col-sm-3 control-label">Nama Mahasiswa Baru</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_maba" class="form-control" id="inputEmail3" placeholder="Nama Mahasiswa Baru" required>
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
                                <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Tempat Lahir" required>
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
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat" required> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah" class="col-sm-3 control-label">Asal Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal_sekolah"  class="form-control" id="inputPassword3" placeholder="Asal Sekolah" required>
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="nim_sekolah" class="col-sm-3 control-label">Nim Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nim_sekolah" class="form-control" id="inputEmail3" placeholder="Nim Sekolah" required>
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
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="No Hp" required>
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
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
                    <a href="?page=pendaftaran&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pendaftaran
                    </a>
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
    $tgl_lahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
        $tahun =$_POST['tahun'];
        $bulan =$_POST['bulan'];
        $tanggal =$_POST['tanggal'];
    $alamat=$_POST['alamat'];    
    $asal_sekolah=$_POST['asal_sekolah'];
    $nim_sekolah=$_POST['nim_sekolah'];
    $jurusan=$_POST['jurusan'];
    $agama=$_POST['agama'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];
    //buat sql
    $sql="INSERT INTO tb_daftar VALUES ('$no_daftar','$nama_maba','$jenis_kelamin','$tempat_lahir','$tgl_lahir','$alamat','$asal_sekolah','$nim_sekolah','$jurusan','$agama','$no_hp','$email')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Tambah Pendaftaran Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendaftaran&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }
?>