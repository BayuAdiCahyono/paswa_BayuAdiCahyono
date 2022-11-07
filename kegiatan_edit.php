<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">KEGIATAN</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kegiatan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="kegiatan_pro_edit.php">
                    <?php
                    include_once("connection.php");
                    $id = $_GET['id'];
                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_kegiatan WHERE id= '$id' ");

                    $res = mysqli_fetch_array($result_data);
                    $tanggal = $res['tanggal'];
                    $jam_mulai = $res['jam_mulai'];
                    $jam_selesai = $res['jam_selesai'];
                    $nama_kegiatan = $res['nama_kegiatan'];
                    $narasumber = $res['narasumber'];
                    $pic = $res['pic'];
                    ?>
                    <table>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Tanggal</label>
                                <input type="date" class="form-control form-control-user" placeholder="" name="tanggal" value="<?= $tanggal; ?>">
                            </div>
                            <div class=" col-sm-6">
                                <label>Jam Mulai</label>
                                <input type="time" class="form-control form-control-user" id="exampleLastName" placeholder="" name="jam_mulai" value="<?= $jam_mulai; ?>">
                            </div>
                            <div class=" col-sm-6">
                                <label>Jam Selesai</label>
                                <input type="time" class="form-control form-control-user" id="exampleLastName" placeholder="" name="jam_selesai" value="<?= $jam_selesai; ?>">
                            </div>
                            <div class=" col-sm-6">
                                <label>Nama Kegiatan</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="nama_kegiatan" value="<?= $nama_kegiatan; ?>">
                            </div>
                            <div class=" col-sm-6">
                                <label>NaraSumber</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="narasumber" value="<?= $narasumber; ?>">
                            </div>
                            <div class=" col-sm-6">
                                <label>PIC</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="pic" value="<?= $pic; ?>">
                            </div>
                        </div>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="kegiatan.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>