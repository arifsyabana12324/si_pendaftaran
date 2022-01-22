<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Agama</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_agama WHERE id_agama='" . $_GET ['id_agama'] . "'";
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
                        <h3><u>DATA AGAMA</u></h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>ID</td> <td><?= $data['id_agama'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Agama</td> <td><?= $data['agama'] ?></td>
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