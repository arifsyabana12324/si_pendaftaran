<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Jurusan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_jurusan WHERE id_jurusan='" . $_GET ['id_jurusan'] . "'";
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
                        <h3><u>DATA JURUSAN</u></h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>ID</td> <td><?= $data['id_jurusan'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Jurusan</td> <td><?= $data['jurusan'] ?></td>
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