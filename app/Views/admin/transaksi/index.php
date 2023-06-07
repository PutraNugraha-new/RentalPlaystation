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
                <p>Daftar Penyewaan Playstation</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4 card">
                    <div class="card-body d-flex align-items-center">
                        <div class="ps col-3 d-flex">
                            <div class="ikon">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <div class="data">
                                <h4>Playstation</h4>
                                <p><?= $jumlahPs; ?></p>
                            </div>
                        </div>
                        <div class="sd col-3 d-flex">
                            <div class="ikon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="data">
                                <h4>Selesai</h4>
                                <p><?= $jumlahSelesai; ?></p>
                            </div>
                        </div>
                        <div class="user col-3 d-flex">
                            <div class="ikon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="data">
                                <h4>Pelanggan</h4>
                                <p><?= $jumlahPelanggan ?></p>
                            </div>
                        </div>
                        <div class="sdd col-3 d-flex">
                            <div class="ikon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <div class="data">
                                <h4>Disewa</h4>
                                <p><?= $jumlahDisewa ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-primary" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                        <a href="#" class="btn btn-primary mb-3 tombolTambahDataTransaksi" data-toggle="modal" data-target="#formModal">
                            <i class="fas fa-plus-circle"></i>
                            <span>Tambah Data</span>
                        </a>
                    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No Transaksi</th>
                                            <th>Nama Penyewa</th>
                                            <th>Playstation</th>
                                            <th>Lama Peminjaman</th>
                                            <th>Status Peminjaman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No Transaksi</th>
                                            <th>Nama Penyewa</th>
                                            <th>Playstation</th>
                                            <th>Lama Peminjaman</th>
                                            <th>Status Peminjaman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($transaksi as $data): ?>
                                            <tr>
                                                <td><?= $data->no_transaksi; ?></td>
                                                <td><?= $data->nama_pelanggan ?></td>
                                                <td><?= $data->nama_ps ?></td>
                                                <td><?= $data->lama_peminjaman ?> Jam</td>
                                                <td>
                                                    <?php 
                                                        if($data->status_peminjaman == 'Selesai') {
                                                            echo '<span class="badge badge-selesai w-100 py-2">Selesai</span>';
                                                        }else{
                                                            echo '<span class="badge badge-disewa w-100 py-2">Disewa</span>';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <div class="col-12">
                                                        <a href="" class="btn btn-dark p-1 tampilModalUbahTransaksi" data-toggle="modal" data-target="#formModal" data-id="<?= $data->no_transaksi ?>">
                                                            <i class="fas fa-edit text-info"></i>
                                                        </a>
                                                        <form action="/transaksi/<?= $data->no_transaksi; ?>" method="post" class="d-inline mx-auto">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-dark p-1" onclick="return confirm('yakin ingin menghapus ??')"><i class="fas fa-trash text-danger"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="col-12 mt-1">
                                                        <a href="/struk/<?= $data->no_transaksi ?>" class="btn btn-secondary text-white p-1">
                                                            Invoice
                                                        </a>
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
                <h5 class="modal-title" id="judulModal">Tambah Data Penyewaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form  -->
                <form action="/admin/transaksi/save" method="POST">
                    <input type="hidden" name="no_transaksi" id="no_transaksi">
                <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="tgl_peminjaman" class="col-sm-4 col-form-label">Tanggal Peminjaman</label>
                        <div class="col-sm-8">
                            <input type="datetime-local" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_pelanggan" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                        <div class="col-sm-8">
                        <select name="id_pelanggan" id="id_pelanggan" class="form-control" autocomplete="on">
                            <option selected>Pilih Pelanggan</option>
                            <?php
                            // Mengurutkan data pelanggan secara ascending berdasarkan nama_pelanggan
                            usort($pelanggan, function($a, $b) {
                                return $a['nama_pelanggan'] <=> $b['nama_pelanggan'];
                            });
                            
                            foreach ($pelanggan as $data) :
                            ?>
                            <option value="<?= $data['id_pelanggan']; ?>">
                                <?= $data['nama_pelanggan']; ?> | <?= $data['no_identitas']; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_ps" class="col-sm-4 col-form-label">Nama Playstation</label>
                        <div class="col-sm-8">
                            <select name="id_ps" id="id_ps" class="form-control">
                                <option selected>Pilih Playstation</option>
                                <?php foreach ($ps as $data) : ?>
                                    <option value="<?= $data['id_ps']; ?>"><?= $data['nama_ps']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_sewa" class="col-sm-4 col-form-label">Harga Sewa</label>
                        <div class="col-sm-8">
                            <input type="text" name="harga_sewa" id="harga_sewa" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lama_peminjaman" class="col-sm-4 col-form-label">Lama Peminjaman</label>
                        <div class="col-sm-8">
                            <select name="lama_peminjaman" id="lama_peminjaman" class="form-control">
                                <option selected>Lama Peminjaman</option>
                                <option value='1'>1 Jam</option>
                                <option value='6'>6 Jam</option>
                                <option value='12'>12 Jam</option>
                                <option value='24'>24 Jam</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total_harga" class="col-sm-4 col-form-label">Total Harga</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="total_harga" name="total_harga" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tunai" class="col-sm-4 col-form-label">Tunai</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="tunai" name="tunai" placeholder="Tunai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kembalian" class="col-sm-4 col-form-label">Kembalian</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="kembalian" name="kembalian" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_peminjaman" class="col-sm-4 col-form-label">Status Peminjamnan</label>
                        <div class="col-sm-8">
                            <select name="status_peminjaman" id="status_peminjaman" class="form-control">
                                <option value='Disewa'>Disewa</option>
                                <option value='Selesai'>Selesai</option>
                            </select>
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