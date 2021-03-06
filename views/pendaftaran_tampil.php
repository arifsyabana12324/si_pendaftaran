<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Riwayat Pendaftaran</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No Pendaftaran</th>
                                <th>Nama Mahasiswa Baru</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Asal Sekolah</th>
                                <th>Nim Sekolah</th>
                                <th>Jurusan</th>
                                <th>Agama</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_daftar";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $data['no_daftar'] ?></td>
                                    <td><?= $data['nama_maba'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['tempat_lahir'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['asal_sekolah'] ?></td>
                                    <td><?= $data['nim_sekolah'] ?></td>
                                    <td><?= $data['jurusan'] ?></td>
                                    <td><?= $data['agama'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['email'] ?></td>
                                    <td>
                                        <a href="?page=pendaftaran&actions=detail&no_daftar=<?= $data['no_daftar'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=pendaftaran&actions=edit&no_daftar=<?= $data['no_daftar'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=pendaftaran&actions=tambah" class="btn btn-info btn-xs">
                                            <span class="fa fa-arrow-right"></span>
                                        </a>
                                        <a href="?page=pendaftaran&actions=delete&no_daftar=<?= $data['no_daftar'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=pendaftaran&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Pendaftaran
                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
