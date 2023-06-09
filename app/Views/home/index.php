<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMACO | Rental PS</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/dashboard/css/style.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top nav-home">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#home">
                <img src="<?= base_url() ?>/dashboard/img/ps-logo.png" class="img-fluid" width="80"  alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link mx-3 text-light" href="#home">Home</a>
                <a class="nav-item nav-link mx-3 text-light" href="#harga">Harga</a>
                <a class="nav-item nav-link mx-3 text-light" href="#game">Game</a>
                <a class="nav-item nav-link mx-3 text-light" href="#pesan">Sewa</a>
            </div>
        </div>
    </div>
</nav>

    <div class="row mx-0 hero-home" id="home">
        <div class="col-7 kiri">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h2>RENTAL PLAYSTATION
                            <span>AMACO</span>
                        </h2>
                        <P>Temukan pengalaman gaming terbaik dengan menyewa PlayStation terbaru dan koleksi game seru. Nikmati hiburan berkualitas tanpa harus membeli konsol sendiri. <strong style="color:#000080;"> Sewa sekarang! </strong></P>
                        <a href="#pesan" class="btn">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="row hero-ps">
                <div class="col-12" >
                    <img src="<?= base_url() ?>/dashboard/img/ps4.png" class="ps4" alt="ps" data-aos="fade-up" data-aos-duration="2000">
                    <img src="<?= base_url() ?>/dashboard/img/ps5.png" class="ps5" alt="ps" data-aos="fade-up" data-aos-duration="2000">
                </div>
            </div>
        </div>
        <div class="col-5 kanan">
            <div class="row">
                <div class="col-12" data-aos="fade-down" data-aos-duration="2000">
                    <img src="<?= base_url() ?>/dashboard/img/stick.png" class="stick" alt="" >
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <p class="text-light mr-5">Follow Us 
                        <a href="">
                            <img src="<?= base_url() ?>/dashboard/img/linkdin.svg" alt="LINKDIN">
                        </a>
                        <a href="" class="mx-2">
                            <img src="<?= base_url() ?>/dashboard/img/github.svg" alt="GITHUB">
                        </a>
                        <a href="">
                            <img src="<?= base_url() ?>/dashboard/img/ig.svg" alt="IG">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="list-harga" id="harga">
        <div class="row m-0">
            <div class="col-12">
                <h1>Biaya Penyewaan</h1>
                <p>Pilih Paket Penyewaan Ps Di Bawah Sini</p>
            </div>
        </div>
        <div class="container px-5">
            <div class="row m-0">
                <div class="col-4" data-aos="fade-right" data-aos-duration="3000">
                    <div class="card">
                        <div class="card-header">
                            <p>Amaco Playstation</p>
                            <p>Biaya Sewa</p>
                            <p>
                                Rp.
                                <span>
                                    90
                                </span>
                                000
                            </p>
                            <p>12 Jam</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Kabel HDMI</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Kabel Power</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>2 Stik, Ps 4</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Game Digital</span>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="card">
                        <div class="card-header">
                            <p>Amaco Playstation</p>
                            <p>Biaya Sewa</p>
                            <p>
                                Rp.
                                <span>
                                    150
                                </span>
                                000
                            </p>
                            <p>24 Jam</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Kabel HDMI</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Kabel Power</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>2 Stik, Ps 4</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Game Digital</span>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-left" data-aos-duration="3000">
                    <div class="card">
                        <div class="card-header">
                            <p>Amaco Playstation</p>
                            <p>Biaya Sewa</p>
                            <p>
                                Rp.
                                <span>
                                    170
                                </span>
                                000
                            </p>
                            <p>24 Jam</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Kabel HDMI</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Kabel Power</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>2 Stik, Ps 4 + TV</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Game Digital</span>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-12 my-4 d-flex justify-content-center">
                    <a href="" class="btn btn-cekHarga mx-auto" data-toggle="modal" data-target="#exampleModalLong">Cek Harga Lainnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="list-game" id="game">
        <div class="overlay">
            <div class="container daftar-gim">
                <div class="row m-0">
                    <div class="col-12">
                        <h1>Daftar list</h1>
                        <h1>Game</h1>
                        <p>Main lebih seru dan enjoy</p>
                    </div>
                </div>
                <div class="row m-0" data-aos="fade-right" data-aos-duration="3000">
                    <div class="col-4">
                        <ol>
                            <li>Fifa 21</li>
                            <li>Pes 2021</li>
                            <li>NBA 2k21</li>
                            <li>UFC 4</li>
                            <li>CTR</li>
                            <li>GTA V</li>
                            <li>Street Fighter V</li>
                            <li>One Piece Warrior 5</li>
                            <li>Moto Gp 2020</li>
                            <li>Dragon Ball Kakarot</li>
                            <li>Captain Tsubasa</li>
                            <li>One Punch Man</li>
                            <li>Yakuza Like Dragon</li>
                            <li>NFS Heat</li>
                            <li>Narut to Boruto : Final Strike</li>
                        </ol>
                    </div>
                    <div class="col-8">
                        <ol>
                            <li>Pes 2021 Season Updatae</li>
                            <li>Fifa 2022</li>
                            <li>GTA V</li>
                            <li>It Take Two</li>
                            <li>Marvel's Avangers</li>
                            <li>Lego Harry Potter</li>
                            <li>Lego Jurassic Park</li>
                            <li>Sifu</li>
                            <li>Horizon Forbidden West</li>
                            <li>Mortal Kombat 11</li>
                            <li>Tekken 7</li>
                            <li>Amazing Spiderman</li>
                            <li>Spiderman Miles Morales</li>
                            <li>The Last of Us 2</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pemesanan m-0" id="pesan">
        <div class="container" data-aos="fade-up" data-aos-duration="3000">
            <h1>Form Pendaftaran Pelanggan</h1>
            <p>Silahkan Isi Form dibawah untuk mendata diri</p>
            <div class="row d-flex justify-content-center">
                <div class="col-5">
                    <form action="/Home/save" method="POST">
                    <?= csrf_field(); ?>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-primary" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama" width="50">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Nama" width="50">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="no Whatsapp" width="50">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="no_identitas" name="no_identitas" placeholder="No Identitas" width="50">
                        </div>
                        <div class="form-group">
                            <select name="jenis_identitas" id="jenis_identitas" width="50" class="form-control">
                                <option value="SIM">SIM</option>
                                <option value="KTP">KTP</option>
                                <option value="KTM">KTM</option>
                                <option value="STNK">STNK</option>
                            </select>
                        </div>
                        <div class="tombol d-flex justify-content-center">
                            <button type="submit" class="btn">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Harga Penyewaan Playstation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                        <div class="card-header">
                            <h3>PS 2</h3>
                            <ul>
                                <li>Rp 3.000 /jam</li>
                                <li>Rp 15.000 / 6 jam</li>
                                <li>Rp 30.000 / 12 jam</li>
                                <li>Rp 50.000 / 24 jam</li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Kabel HDMI</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Kabel Power</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>2 Stik, Ps 2</span>
                                    <hr>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Game Digital</span>
                                    <hr>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>PS 3</h3>
                        <ul>
                            <li>Rp 5.000 /jam</li>
                            <li>Rp 20.000 / 6 jam</li>
                            <li>Rp 40.000 / 12 jam</li>
                            <li>Rp 80.000 / 24 jam</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Kabel HDMI</span>
                                <hr>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Kabel Power</span>
                                <hr>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>2 Stik, Ps 3</span>
                                <hr>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Game Digital</span>
                                <hr>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3>PS 4</h3>
                        <ul>
                            <li>Rp 8.000 /jam</li>
                            <li>Rp 45.000 / 6 jam</li>
                            <li>Rp 90.000 / 12 jam</li>
                            <li>Rp 150.000 / 24 jam</li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Kabel HDMI</span>
                                <hr>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Kabel Power</span>
                                <hr>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>2 Stik, Ps 4</span>
                                <hr>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Game Digital</span>
                                <hr>
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>




    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/dashboard/js/demo/datatables-demo.js"></script>


    <!-- <script src="<?= base_url(); ?>/dashboard/js/jquery-1.11.2.min.js"></script> -->
    <script src="<?= base_url(); ?>/dashboard/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>