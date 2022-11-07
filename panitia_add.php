<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Panitia</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Panitia</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="panitia_pro_add.php">
                    <table>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>NIM</label>
                                <input type="text" class="form-control form-control-user" placeholder="NIM" name="nim">
                            </div>
                            <div class="col-sm-6">
                                <label>Nama</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Lengkap" name="nama">
                            </div>
                            <div class="col-sm-6">
                                <label>Kelas</label>
                                <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas">
                                    <option value="0">--Pilih--</option>
                                    <option value="Pagi">Pagi</option>
                                    <option value="Malam">Malam</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>Semester</label>
                                <select class="form-control form-control-user" Placeholder="Semester" name="semester">
                                    <option value="0">--Pilih--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="email">
                            </div>
                            <div class="col-sm-6">
                                <label>NO HP</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="no_hp">
                            </div>
                            <div class="col-sm-6">
                                <label>jabatan</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="" name="jabatan">
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