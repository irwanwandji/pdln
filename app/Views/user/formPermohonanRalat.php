<?= $this->extend('main/layout')?>

<?= $this->section('tittle')?>
Form Permohonan Ralat
<?= $this->endSection('tittle')?>

<?= $this->section('isi')?>

 <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Inputs</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Formulir Permohonan Ralat</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- <div class="container-fluid"> -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- <div class="card card-default"> -->
                <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                        <h4 class="card-title">Nama</h4>
                                        <h6 class="card-subtitle">-</h6>
                                        <form class="mt-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nama" id="nama" readonly>
                                            </div>
                                        </form> 
                                        <h4 class="card-title">NIP</h4>
                                        <h6 class="card-subtitle">-</h6>
                                        <form class="mt-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nip" id="nip" required="">
                                            </div>
                                        </form>
                                        <h4 class="card-title">Satker</h4>
                                        <h6 class="card-subtitle">-</h6>
                                        <form class="mt-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="satker" id="satker" required="">
                                            </div>
                                        </form>
                                        <h4 class="card-title">Jabatan</h4>
                                        <h6 class="card-subtitle">-</h6>
                                        <form class="mt-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="jabatan" id="jabatan" required="">
                                            </div>
                                        </form>
                                        <br>
                                        <center><button type="button" class="btn btn-success"><i class="fas fa-check"></i> &nbsp SIMPAN</button></center>
                            </div>

                            <div class="col-sm-3">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-body"> -->
                                        <h4 class="card-title">File Upload</h4>
                                        <h6 class="card-subtitle"><code>Ukuran Berkas Maksimal 10Mb, Dengan Format .Pdf</code></h6>
                                        <form class="mt-3">
                                            <fieldset class="form-group">
                                                <input type="file" class="form-control-file" id="exampleInputFile">
                                            </fieldset>
                                        </form>
                                    <!-- </div> -->
                                <!-- </div> -->
                            </div>
                            </div>
                            </div>
                            
                            <br><br><br><br><br>                    
                    
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            <!-- </div> -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Tim Kerja PDLN. Designed and Developed by <a
                    href="https://roum.kemkes.go.id">TIROUM</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->

<?= $this->endSection('isi')?>

