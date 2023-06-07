<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
                <p>
                    <?= date('D, d M Y'); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Informasi Mengenai Profile Pengguna</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-body d-flex">
                        <div class="col-4">
                            <img src="<?= base_url() ?>/dashboard/img/<?= user()->user_image ?>" class="rounded" width="100%" alt="Profile">
                        </div>
                        <div class="col-8 mt-3">
                            <form>
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" value="<?= user()->fullname ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" value="<?= user()->jenis_kelamin ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">Alamat Domisili</label>
                                    <div class="col-sm-8">
                                    <textarea class="form-control" cols="30" rows="5" readonly><?= user()->alamat ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">No Whatsapp</label>
                                    <div class="col-sm-4">
                                    <input type="text" class="form-control" value="<?= user()->no_wa ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">Role / Level</label>
                                    <div class="col-sm-4">
                                        <?php foreach ($userGroups as $userGroup): ?>
                                        <input type="text" class="form-control" value="<?= $userGroup['name'] ?>" readonly>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>