<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/src/assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- This page plugin CSS -->
    <link href="../assets/src/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/src/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<?= $this->extend('main/layout') ?>

<?= $this->section('tittle') ?>
Daftar Tiket
<?= $this->endSection('tittle') ?>

<?= $this->section('isi') ?>

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- multi-column ordering -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Tiket</h4>
                <h6 class="card-subtitle">
                    <code></code>
                </h6>
                <div class="table-responsive">
                    <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID Tiket</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Satker</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger</td>
                                <td>Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm" id="btn-edit" title="Kembalikan Pengajuan">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a href="#" class="btn btn-success btn-sm btn-delete" title="Hapus Pengajuan">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm btn-delete" title="Hapus Pengajuan">
                                        <i class="fa fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett</td>
                                <td>Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>$170,750</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton</td>
                                <td>Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>$86,000</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric</td>
                                <td>Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>$433,060</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi</td>
                                <td>Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>$162,700</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle</td>
                                <td>Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>$372,000</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod</td>
                                <td>Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>$137,500</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona</td>
                                <td>Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>$327,900</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen</td>
                                <td>Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>$205,500</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya</td>
                                <td>Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>$103,600</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena</td>
                                <td>Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>$90,560</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn</td>
                                <td>Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>$342,000</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde</td>
                                <td>Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>$470,600</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley</td>
                                <td>Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>$313,500</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana</td>
                                <td>Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>$385,750</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael</td>
                                <td>Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>$198,500</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul</td>
                                <td>Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>$725,000</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria</td>
                                <td>Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>$237,500</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley</td>
                                <td>Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>$132,000</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai</td>
                                <td>Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>$217,500</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette</td>
                                <td>Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>$345,000</td>
                                <td>$345,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<?= $this->endSection('isi') ?>