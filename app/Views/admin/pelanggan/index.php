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
                <p>Daftar Pelanggan Amaco</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-primary" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('pesan_merah')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('pesan_merah'); ?>
                        </div>
                    <?php endif; ?>
                        <a href="#" class="btn btn-primary mb-3 tombolTambahDataPelanggan" data-toggle="modal" data-target="#formModal">
                            <i class="fas fa-plus-circle"></i>
                            <span>Tambah Data</span>
                        </a>
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pelanggan</th>
                                            <th>No Identitas</th>
                                            <th>No WA</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Pelanggan</th>
                                            <th>No Identitas</th>
                                            <th>No WA</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($pelanggan as $data): ?>
                                            <tr>
                                                <td><?= $data['nama_pelanggan']; ?></td>
                                                <td><?= $data['no_identitas'] ?></td>
                                                <td><?= $data['no_telp'] ?></td>
                                                <td>
                                                    <div class="col-12">
                                                        <a href="" class="btn btn-dark p-1 tampilModalUbahPelanggan" data-toggle="modal" data-target="#formModal" data-id="<?= $data['id_pelanggan'] ?>">
                                                            <i class="fas fa-edit text-info"></i>
                                                        </a>
                                                        <form action="/pelanggan/<?= $data['id_pelanggan']; ?>" method="post" class="d-inline mx-auto">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-dark p-1" onclick="return confirm('yakin ingin menghapus ??')"><i class="fas fa-trash text-danger"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form  -->
                <form action="/admin/pelanggan/save" method="POST">
                    <input type="hidden" name="id_pelanggan" id="id_pelanggan">
                <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama_pelanggan" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_pelanggan" placeholder="Nama Pelanggan" name="nama_pelanggan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-4 col-form-label">No Whatsapp</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Whatsapp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat Peminjaman</label>
                        <div class="col-sm-8">
                            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_identitas" class="col-sm-4 col-form-label">No Identitas</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="no_identitas" name="no_identitas" placeholder="Nomor Identitas">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>