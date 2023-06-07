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
                            <form action="/admin/settings/ubah" method="post">
                            <input type="hidden" value="<?= user()->id ?>" name="id" id="id">
                            <?= csrf_field(); ?>
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-4">
                                    <input type="text" name="fullname" class="form-control" value="<?= user()->fullname ?>">
                                    </div>
                                </div>
                                    <input type="hidden" name="email" class="form-control" value="<?= user()->email ?>">
                                    <input type="hidden" name="password_hash" class="form-control" value="<?= user()->password_hash ?>">
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-4">
                                    <select name="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?= user()->jenis_kelamin ?>" selected><?= user()->jenis_kelamin ?></option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">Alamat Domisili</label>
                                    <div class="col-sm-8">
                                    <textarea class="form-control" name="alamat" cols="30" rows="5"><?= user()->alamat ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">No Whatsapp</label>
                                    <div class="col-sm-4">
                                    <input type="text" name="no_wa" class="form-control" value="<?= user()->no_wa ?>">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <button type="submit" class="btn btn-primary">Update Data</button>
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