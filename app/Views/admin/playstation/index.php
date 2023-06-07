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
                <p>Daftar Perangkat Playstation</p>
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
                        <a href="#" class="btn btn-primary mb-3 tombolTambahDataPs" data-toggle="modal" data-target="#formModal">
                            <i class="fas fa-plus-circle"></i>
                            <span>Tambah Data</span>
                        </a>
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Ps | Tipe Ps</th>
                                            <th>Harga Sewa</th>
                                            <th>Tgl Pembelian</th>
                                            <th>Jumlah unit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Ps | Tipe Ps</th>
                                            <th>Harga Sewa</th>
                                            <th>Tgl Pembelian</th>
                                            <th>Jumlah unit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($ps as $data): ?>
                                            <tr>
                                                <td><?= $data['nama_ps']; ?> | <?= $data['tipe_ps'] ?></td>
                                                <td><?= $data['harga_sewa'] ?></td>
                                                <td><?= $data['tgl_pembelian'] ?></td>
                                                <td><?= $data['jumlah_unit'] ?></td>
                                                <td>
                                                    <div class="col-12">
                                                        <a href="" class="btn btn-dark p-1 tampilModalUbahPs" data-toggle="modal" data-target="#formModal" data-id="<?= $data['id_ps'] ?>">
                                                            <i class="fas fa-edit text-info"></i>
                                                        </a>
                                                        <form action="/playstation/<?= $data['id_ps']; ?>" method="post" class="d-inline mx-auto">
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
                <h5 class="modal-title" id="judulModal">Tambah Data Playstation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form  -->
                <form action="/admin/playstation/save" method="POST">
                    <input type="hidden" name="id_ps" id="id_ps">
                <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama_ps" class="col-sm-4 col-form-label">Nama PS</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_ps" placeholder="Playstation" name="nama_ps">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipe_ps" class="col-sm-4 col-form-label">Tipe PS</label>
                        <div class="col-sm-8">
                            <select name="tipe_ps" id="tipe_ps" class="form-control">
                                <option selected>Pilih Tipe</option>
                                <option value="slim">Slim</option>
                                <option value="Fat">Fat</option>
                                <option value="Pro">Pro</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_sewa" class="col-sm-4 col-form-label">Harga Sewa</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="harga_sewa" placeholder="Harga Sewa" name="harga_sewa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_pembelian" class="col-sm-4 col-form-label">Tanggal Pembelian</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tgl_pembelian" name="tgl_pembelian">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_unit" class="col-sm-4 col-form-label">Jumlah Unit</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="jumlah_unit" name="jumlah_unit" placeholder="Jumlah Unit">
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