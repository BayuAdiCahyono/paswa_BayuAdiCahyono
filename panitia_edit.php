<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Peserta</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Peserta</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="panitia_pro_edit.php">
                    <?php
                    include_once("connection.php");
                    $id = $_GET['id'];
                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_panitia WHERE nim= '$id' ");

                    $res = mysqli_fetch_array($result_data);
                    $nim = $res['nim'];
                    $nama = $res['nama'];
                    $kelas = $res['kelas'];
                    $semester = $res['semester'];
                    $email = $res['email'];
                    $no_hp = $res['no_hp'];
                    $jabatan = $res['jabatan'];
                    ?>
                    <table>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>NIM</label>
                                <input type="text" class="form-control form-control-user" placeholder="NIM" name="nim" value="<?= $nim; ?>">
                            </div>
                            <div class=" col-sm-6">
                                <label>Nama</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Lengkap" name="nama" value="<?= $nama; ?>">
                            </div>
                            <div class=" col-sm-6">
                                <label>Kelas</label>
                                <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas">
                                    <option value="0">--Pilih--</option>
                                    <option value="Pagi" <?= $kelas == 'Pagi' ? 'selected' : ''; ?>>Pagi</option>
                                    <option value="Malam" <?= $kelas == 'Malam' ? 'selected' : ''; ?>>Malam</option>
                                    <option value="Sabtu" <?= $kelas == 'Sabtu' ? 'selected' : ''; ?>>Sabtu</option>
                                    <option value="Minggu" <?= $kelas == 'Minggu' ? 'selected' : ''; ?>>Minggu</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>Semester</label>
                                <select class="form-control form-control-user" Placeholder="Semester" name="semester">
                                    <option value="0">--Pilih--</option>
                                    <option value="1" <?= $semester == '1' ? 'selected' : ''; ?>>1</option>
                                    <option value="2" <?= $semester == '2' ? 'selected' : ''; ?>>2</option>
                                    <option value="3" <?= $semester == '3' ? 'selected' : ''; ?>>3</option>
                                    <option value="4" <?= $semester == '4' ? 'selected' : ''; ?>>4</option>
                                    <option value="5" <?= $semester == '5' ? 'selected' : ''; ?>>5</option>
                                    <option value="6" <?= $semester == '6' ? 'selected' : ''; ?>>6</option>
                                    <option value="7" <?= $semester == '7' ? 'selected' : ''; ?>>7</option>
                                    <option value="8" <?= $semester == '8' ? 'selected' : ''; ?>>8</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="email" value="<?= $email;?>">
                            </div>
                            <div class="col-sm-6">
                                <label>NO HP</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="no_hp" value="<?= $no_hp;?>">
                            </div>
                            <div class="col-sm-6">
                                <label>jabatan</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="jabatan" value="<?= $jabatan;?>">
                            </div>
                        </div>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="panitia.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>