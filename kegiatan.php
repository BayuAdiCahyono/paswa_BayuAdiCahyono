<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid bg-dark">

    <!-- Page Heading -->
    <h1 class="m-0 font-weight-bold text-white">Data Kegiatan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="kegiatan_add.php" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Tanggal</td>
                            <td>Jam Mulai</td>
                            <td>jam selesai</td>
                            <td>nama Kegiatan</td>
                            <td>narasumber</td>
                            <td>pic</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connection.php");
                        $no = 0;
                        $result = mysqli_query($mysqli, "SELECT * FROM tab_kegiatan");
                        while ($row = mysqli_fetch_array($result)) {
                            $no++;
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $row['tanggal'] . "</td>";
                            echo "<td>" . $row['jam_mulai'] . "</td>";
                            echo "<td>" . $row['jam_selesai'] . "</td>";
                            echo "<td>" . $row['nama_kegiatan'] . "</td>";
                            echo "<td>" . $row['narasumber'] . "</td>";
                            echo "<td>" . $row['pic'] . "</td>";
                            echo "<td><a href=\"kegiatan_edit.php?id=$row[id]\">Edit</a> | 
                        <a href=\"kegiatan_pro_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
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