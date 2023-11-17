<?= $this->extend('main/layout') ?>

<?= $this->section('tittle') ?>
Form Permohonan Baru
<?= $this->endSection('tittle') ?>

<?= $this->section('isi') ?>

<!-- Page wrapper  -->
<!-- ============================================================== -->

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
                        <li class="breadcrumb-item text-muted active" aria-current="page">INPUT DATA PEGAWAI</li>
                    </ol>
                </nav>
            </div>
        </div>
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
        <div class="col-sm-4">
            <?= form_open('') ?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nama" placeholder="Nama Pemohon">
                <label for="nama">Nama Pemohon</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nik" placeholder="NIK">
                <label for="nip">NIK</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nip" placeholder="NIP">
                <label for="nip">NIP</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="jabatan" placeholder="Jabatan">
                <label for="jabatan">Jabatan</label>
            </div>
            
            <div class="form-floating mb-3">    
                <!-- <input type="text" class="form-control" id="unor" placeholder="Unit Organisasi"> -->
                <!-- <label for="unor">Unit Organisasi</label> -->
                
                <select class="custom-select custom-select-set form-control bg-white border-0" id="unor" name="unor">
                        <option selected>-Pilih Unit Organisasi-</option>
                        <option value="1">Inspektorat Jenderal</option>
                        <option value="2">Sekretariat Jenderal</option>
                        <option value="3">Ditjen Kesehatan Masyarakat</option>
                        <option value="4">Ditjen Pencegahan dan Pengendalian Penyakit</option>
                        <option value="5">Ditjen Pelayanan Kesehatan</option>
                        <option value="6">Ditjen Kefarmasian dan Alat Kesehatan</option>
                        <option value="7">Ditjen Tenaga Kesehatan</option>
                        <option value="8">Badan Kebijakan Pembangunan Kesehatan</option>
                        </select>        
            </div>
            
            <!-- <label for="satker">Satuan Kerja</label> -->
            <div class="form-floating mb-3">
                <!-- <input type="text" class="form-control" id="satker" name="satker" placeholder="Satuan Kerja"> -->
            <!-- <div class="customize-input float-right"> -->
                        <select class="custom-select custom-select-set form-control bg-white border-0" id="satker" name="satker">
                                <option selected>-Pilih Satuan Kerja-</option>
                               <!--  <option value="1">Inspektorat Jenderal</option>
                                <option value="2">Sekretariat Jenderal</option>
                                <option value="3">Ditjen Kesehatan Masyarakat</option>
                                <option value="4">Ditjen Pencegahan dan Pengendalian Penyakit</option>
                                <option value="5">Ditjen Pelayanan Kesehatan</option>
                                <option value="6">Ditjen Kefarmasian dan Alat Kesehatan</option>
                                <option value="7">Ditjen Tenaga Kesehatan</option>
                                <option value="8">Badan Kebijakan Pembangunan Kesehatan</option> -->
                            </select>
                        </div>
            <!-- <div class="form-floating mb-3">
                <input type="text" class="form-control" id="satker" name="satker" placeholder="Satuan Kerja">
                <label for="satker">Satuan Kerja</label>
            </div> -->
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="notlp" placeholder="Nomor Telepon">
                <label for="notlp">Nomor Telepon</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="email" placeholder="email">
                <label for="email">Email</label>
            </div>
            <?= form_close(); ?>


        </div>

        <div class="col-sm-4">
            <div class="card">
                <!-- <div class="card-header">
                    <h4 class="card-title">File Upload</h4>
                    <h6 class="card-subtitle"><code>Ukuran Berkas Maksimal 10Mb, Dengan Format .Pdf</code></h6>
                </div> -->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="dok7" class="form-label">Foto</label>
                        <input class="form-control form-control-sm" id="dok7" type="file">
                        <!-- <a href="index" title="blablabla"> -->
                        <h6 class="page-title" align="right" title="Sesuai ketentuan Doc. 9303 on Machine Readable Travel Documents oleh ICAO (International Civil Aviation Organization) 1. Foto terbaru (maksimal 6 bulan terakhir), kualitas  standar foto studio. Pakaian: - Laki-laki: PSL (Pakaian Sipil Lengkap), tidak ada aksesori tambahan di kepala, telinga terlihat, tidak menggunakan kacamata. Jika menggunakan kacamata pastikan tidak ada pantulan cahaya dan frame tidak menutupi lensa mata. - Perempuan: bebas rapi; bagi yang memakai jilbab telinga harus tertutup, tidak terlihat rambut, jilbab tidak berwarna putih, dan bayangan jilbab tidak jatuh di wajah; rambut/poni tidak menutupi dahi 2. Berlatar belakang putih. 3. Foto ekspresi natural." data-toggle="popover" data-placement="top" data-content="tes"><code><i>Klik Syarat Foto</i></code>&nbsp<i class="fas fa-info-circle"></i></h6>
<!-- <div class="button-box">
<button type="button" class="btn btn-secondary" data-container="body"
                                        title="Sesuai ketentuan Doc. 9303 on Machine Readable Travel Documents oleh ICAO (International Civil Aviation Organization)
1. Foto terbaru (maksimal 6 bulan terakhir), kualitas  standar foto studio.
   Pakaian: 
   - Laki-laki: PSL (Pakaian Sipil Lengkap), tidak ada aksesori tambahan di kepala, telinga terlihat, tidak menggunakan kacamata.
      Jika menggunakan kacamata pastikan tidak ada pantulan cahaya dan frame tidak menutupi lensa mata.
   - Perempuan: bebas rapi; bagi yang memakai jilbab telinga harus tertutup, tidak terlihat rambut, jilbab tidak berwarna putih,
      dan bayangan jilbab tidak jatuh di wajah; rambut/poni tidak menutupi dahi
2. Berlatar belakang putih.
3. Foto ekspresi natural." data-toggle="popover" data-placement="top"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Syarat Foto
                                    </button></div> -->
                    <!-- </a> -->
                    </div>
                    <div class="mb-3">
                        <label for="dok8" class="form-label">Scan KTP</label>
                        <input class="form-control form-control-sm" id="dok8" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="dok9" class="form-label">Scan KK</label>
                        <input class="form-control form-control-sm" id="dok9" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="dok10" class="form-label">Akta Lahir</label>
                        <input class="form-control form-control-sm" id="dok10" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="dok11" class="form-label">SK Terakhir</label>
                        <input class="form-control form-control-sm" id="dok11" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="dok12" class="form-label">Ijazah</label>
                        <input class="form-control form-control-sm" id="dok12" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="dok13" class="form-label">Kartu Pegawai <code><i>Depan</i></code></label>
                        <input class="form-control form-control-sm" id="dok13" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="dok14" class="form-label">Kartu Pegawai <code><i>Belakang</i></code></label>
                        <input class="form-control form-control-sm" id="dok14" type="file">
                    </div>
                    <div class="customize-input float-right">
                    <h6><code><i>Format Unggah Berkas  : .pdf .jpg</i></h6></code>
                </div>
                </div>
            </div>
        </div>

        <!-- <div class="row"> -->
            <div class="col-sm-3">
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <center>
                <button type="submit" class="btn btn-success">NEXT &nbsp&nbsp&nbsp<i class="far fa-arrow-alt-circle-right"></i></button>
                <!-- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp -->
                <!-- <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                </center> -->
            </div>
        <!-- </div> -->
        <!-- <div class="text-center">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> SIMPAN</button>
        </div> -->
    </div>
</div>
</div>


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
<!-- <footer class="footer text-center text-muted">
                All Rights Reserved by Tim Kerja PDLN. Designed and Developed by <a
                    href="https://roum.kemkes.go.id">TIROUM</a>.
            </footer> -->
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Page wrapper  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Page wrapper  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- <div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Inputs</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Formulir Permohonan Baru</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
    </div>
</div> -->
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
<!-- <div class="card-body">
    <div class="row">
        <div class="col-sm-3">
            <h4 class="card-title">Nama<font color="red">&nbsp*</font>
            </h4>
            <h6 class="card-subtitle"><code>Nama Pemohon</code></h6>
            <form class="mt-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
            </form>
            <h4 class="card-title">NIP<font color="red">&nbsp*</font>
            </h4>
            <h6 class="card-subtitle"><code>NIP Pemohon</code></h6>
            <form class="mt-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="nip" id="nip" required>
                </div>
            </form>
            <h4 class="card-title">Satker<font color="red">&nbsp*</font>
            </h4>
            <h6 class="card-subtitle"><code>Satker Pemohon</code></h6>
            <form class="mt-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="satker" id="satker" required>
                </div>
            </form>
            <h4 class="card-title">Jabatan<font color="red">&nbsp*</font>
            </h4>
            <h6 class="card-subtitle"><code>Jabatan Pemohon</code></h6>
            <form class="mt-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="jabatan" id="jabatan" required>
                </div>
            </form>
            <br>
            <center><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn btn-success"><i class="fas fa-check"></i> &nbsp SIMPAN</button></center>

        </div>

        <div class="col-sm-3">
            <h4 class="card-title">File Upload</h4>
            <h6 class="card-subtitle"><code>Ukuran Berkas Maksimal 10Mb, Dengan Format .Pdf</code></h6>
            <form class="mt-3">
                <fieldset class="form-group">
                    <input type="file" class="form-control-file" id="exampleInputFile" multiple>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<br><br><br><br><br> -->

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
<!-- <footer class="footer text-center text-muted">
                All Rights Reserved by Tim Kerja PDLN. Designed and Developed by <a
                    href="https://roum.kemkes.go.id">TIROUM</a>.
            </footer> -->
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End Page wrapper  -->

<?= $this->endSection('isi') ?>