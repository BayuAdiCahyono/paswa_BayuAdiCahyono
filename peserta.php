<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid bg-dark">

    <!-- Page Heading -->
    <h1 class="m-0 font-weight-bold text-white">Data Peserta</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="peserta_add.php" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIM</td>
                            <td>Nama</td>
                            <td>Prodi</td>
                            <td>Semester</td>
                            <td>Kelas</td>
                            <td>No HP</td>
                            <td>Email</td>
                            <td>Alamat</td>
                            <td>jenis_kelamin</td>
                            <td>agama</td>
                            <td>tempat_lahir</td>
                            <td>tanggal lahir</td>
                            <td>foto</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connection.php");
                        $no = 0;
                        $result = mysqli_query($mysqli, "SELECT * FROM tab_peserta");
                        while ($row = mysqli_fetch_array($result)) {
                            $no++;
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $row['nim'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['prodi'] . "</td>";
                            echo "<td>" . $row['semester'] . "</td>";
                            echo "<td>" . $row['kelas'] . "</td>";
                            echo "<td>" . $row['no_hp'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['alamat'] . "</td>";
                            echo "<td>";
                            if ($row['jenis_kelamin']==1 ){
                                echo 'Laki Laki';
                            }elseif($row['jenis_kelamin']==2) {
                                echo 'Perempuan';
                            }
                            echo "</td>";
                            echo "<td>" . $row['agama'] . "</td>";
                            echo "<td>" . $row['tempat_lahir'] . "</td>";
                            echo "<td>" . $row['tanggal_lahir'] . "</td>";
                            echo "<td>" . $row['foto'] . "</td>";
                            echo "<td><a href=\"peserta_edit.php?id=".$row['nim']."\">Edit</a> | 
                            <a href=\"peserta_pro_delete.php?id=".$row['nim']."\" onClick=\"return confirm('Apakah Anda Yakin Ingin Menghapus?')\">Delete</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>