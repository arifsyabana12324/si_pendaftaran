<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pendaftaran</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail pendaftaran-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_daftar WHERE no_daftar='" . $_GET ['no_daftar'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pendaftaran Mahasiswa/i Baru STMIK ROYAL KISARAN </h2>
                        <h4>Jalan Prof. H. M. Yamin N0.173 Kisaran, Kabupaten Asahan, Sumatera Utara, 21224</h4>
                        <hr>
                        <h3><u>DATA PENDAFTARAN MAHASISWA/I BARU</u></h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>No Pendaftaran</td> <td><?= $data['no_daftar'] ?></td>
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
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Wan Mariatul Kifti, M.M<strong></u><br>
                                        NIDN. 0114057302
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>