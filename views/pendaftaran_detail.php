<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pendaftaran Mahasiswa/i Baru</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT * FROM tb_daftar WHERE no_daftar='" . $_GET ['no_daftar'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">No Pendaftaran</td> <td><?= $data['no_daftar'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Mahasiswa Baru</td> <td><?= $data['nama_maba'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
						<tr>
                            <td>Tempat Lahir</td> <td><?= $data['tempat_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td> <td><?= $data['asal_sekolah'] ?></td>
                        </tr>
                        <tr>
                            <td>Nim Sekolah</td> <td><?= $data['nim_sekolah'] ?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td> <td><?= $data['jurusan'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
                        <tr>
                            <td>No Hp</td> <td><?= $data['no_hp'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td> <td><?= $data['email'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pendaftaran&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pendaftaran </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

