<?= $this->extend('main/layout') ?>

<?= $this->section('tittle') ?>
Form Data Permohonan Baru
<?= $this->endSection('tittle') ?>

<?= $this->section('isi') ?>

<!-- daterange picker -->
<link rel="stylesheet" href="../assets/src/assets/libs/plugins/daterangepicker/daterangepicker.css">

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
                        <li class="breadcrumb-item text-muted active" aria-current="page">Formulir Permohonan Baru</li>
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

<body class="hold-transition sidebar-mini">
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-sm-5">
                    <div class="card">
                        <?= form_open('') ?>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="noreg" class="form-label">No Registrasi</label>
                                <input class="form-control form-control-sm" id="noreg" name="noreg" type="text" value="INV-XXXX-XX-XX" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="jenispemohon" class="form-label">Pilih Jenis Pemohon</label>
                                <select class="custom-select custom-select-set form-control border-1" id="jenispemohon" name="jenispemohon">
                                    <option selected>-Pilih Jenis Pemohon-</option>
                                    <option value="Perorangan">Perorangan</option>
                                    <option value="Kelompok">Kelompok</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="durasiperjalanan" class="form-label">Durasi Perjalanan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control float-right" id="reservation">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="dok4" class="form-label">Kebutuhan Permohonan</label>
                                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow" id="kebutuhanpermohonan" name="kebutuhanpermohonan">
                                    <option selected>-Pilih Kebutuhan Permohonan-</option>
                                    <option value="spsetneg">SP Setneg</option>
                                    <option value="paspordinas">Paspor Dinas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="negara" class="form-label">Negara Tujuan</label>
                                <select data-live-search="true" class="custom-select custom-select-set form-control bg-white border-0 custom-shadow" id="negara" name="negara">
                                    <option selected>-Pilih Negara Tujuan-</option>
                                    <?php foreach ($tampilnegara as $neg) : ?>
                                        <option value="<?= $neg['nama_negara'] ?>"><?= $neg['nama_negara'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="negara" class="form-label">Sumber Dana</label>
                                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow" id="sumberdana" name="sumberdana">
                                    <option selected>-Pilih Sumber Dana-</option>
                                    <option value="13">DIPA Kemkes - Sponsor</option>
                                    <option value="14">Pribadi - DIPA Luar Kemkes</option>
                                    <option value="15">Pribadi - Campuran</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-sm-5">
                    <div class="card">
                        <!-- <div class="card-header">
                    <h4 class="card-title">File Upload</h4>
                    <h6 class="card-subtitle"><code>Ukuran Berkas Maksimal 10Mb, Dengan Format .Pdf</code></h6>
                </div> -->
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="dok1" class="form-label">Surat Usulan</label>
                                <input class="form-control form-control-sm" id="dok1" type="file">
                            </div>
                            <div class="mb-3">
                                <label for="dok2" class="form-label">Undangan/LOA/Registrasi</label>
                                <input class="form-control form-control-sm" id="dok2" type="file">
                            </div>
                            <div class="mb-3">
                                <label for="dok3" class="form-label">Jadwal Kegiatan</label>
                                <input class="form-control form-control-sm" id="dok3" type="file">
                            </div>
                            <div class="mb-3">
                                <label for="dok4" class="form-label">Kerangka Acuan Kerja</label>
                                <input class="form-control form-control-sm" id="dok4" type="file">
                            </div>
                            <div class="mb-3">
                                <label for="dok5" class="form-label">Urgensi Kegiatan</label>
                                <input class="form-control form-control-sm" id="dok5" type="file">
                            </div>
                            <div class="mb-3">
                                <label for="dok6" class="form-label">Surat Tugas</label>
                                <input class="form-control form-control-sm" id="dok6" type="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> SIMPAN</button>
        </div>
    </div>



    <!-- Date range -->
    <div class="form-group">
        <label>Date range:</label>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="far fa-calendar-alt"></i>
                </span>
            </div>
            <input type="text" class="form-control float-right" id="reservation">
        </div>
        <!-- /.input group -->
    </div>
    <!-- /.form group -->


    <!-- jQuery -->
    <script src="../assets/src/assets/libs/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/src/assets/libs/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../assets/src/assets/libs/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../assets/src/assets/libs/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../assets/src/assets/libs/plugins/moment/moment.min.js"></script>
    <script src="../assets/src/assets/libs/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../assets/src/assets/libs/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../assets/src/assets/libs/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../assets/src/assets/libs/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../assets/src/assets/libs/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../assets/src/assets/libs/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../assets/src/assets/libs/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <?= $this->endSection('isi') ?>