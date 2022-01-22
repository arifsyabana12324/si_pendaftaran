<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Agama</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail agama-->
                    <?php
                    $sql = "SELECT * FROM tb_agama WHERE id_agama ='" . $_GET ['id_agama'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">ID</td> <td><?= $data['id_agama'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=agama&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Agama </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

