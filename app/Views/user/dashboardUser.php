<?= $this->extend('main/layout') ?>


<?= $this->section('tittle') ?>
Dashboar User
<?= $this->endSection('tittle') ?>

<?= $this->section('isi') ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="p-2 bg-primary text-center">
                                <h1 class="font-light text-white">2,064</h1>
                                <h6 class="text-white">Total Tickets</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="p-2 bg-cyan text-center">
                                <h1 class="font-light text-white">1,738</h1>
                                <h6 class="text-white">Responded</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="p-2 bg-success text-center">
                                <h1 class="font-light text-white">1100</h1>
                                <h6 class="text-white">Resolve</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="p-2 bg-danger text-center">
                                <h1 class="font-light text-white">964</h1>
                                <h6 class="text-white">Pending</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="<?= base_url() ?>/dashboardpdln.png" alt="">

            </div>
        </div>
    </div>
</div>

<?= $this->endSection('isi') ?>