$(function() {

    $('.tombolTambahDataPs').on('click', function() {
        $('#judulModal').html('Tambah Data');
        $('#nama_ps').val('');
        $('#tipe_ps').val('');
        $('#harga_sewa').val('');
        $('#tgl_pembelian').val('');
        $('#jumlah_unit').val('');
        $('.modal-body form').attr('action', '/admin/playstation/save');
        $('.modal-footer button[type=submit').html('Tambah Data');
    });
    $('.tampilModalUbahPs').on('click', function() {
        $('#judulModal').html('Ubah Data');
        $('.modal-footer button[type=submit').html('Ubah Data');
        $('.modal-body form').attr('action', '/admin/playstation/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: '/admin/playstation/edit',
            data: {id : id},
            method: 'post',
            dataType:'json',
            success:function(data){
                $('#nama_ps').val(data.nama_ps);
                $('#tipe_ps').val(data.tipe_ps);
                $('#harga_sewa').val(data.harga_sewa);
                $('#tgl_pembelian').val(data.tgl_pembelian);
                $('#jumlah_unit').val(data.jumlah_unit);
                $('#id_ps').val(data.id_ps);
            }
        });
    });

    // function pelanggan
    $('.tombolTambahDataPelanggan').on('click', function() {
        $('#judulModal').html('Tambah Data');
        $('#nama_pelanggan').val('');
        $('#tgl_lahir').val('');
        $('#no_telp').val('');
        $('#alamat').val('');
        $('#no_identitas').val('');
        $('#jenis_identitas').val('');
        $('.modal-body form').attr('action', '/admin/pelanggan/save');
        $('.modal-footer button[type=submit').html('Tambah Data');
    });
    $('.tampilModalUbahPelanggan').on('click', function() {
        $('#judulModal').html('Ubah Data');
        $('.modal-footer button[type=submit').html('Ubah Data');
        $('.modal-body form').attr('action', '/admin/pelanggan/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: '/admin/pelanggan/edit',
            data: {id : id},
            method: 'post',
            dataType:'json',
            success:function(data){
                $('#nama_pelanggan').val(data.nama_pelanggan);
                $('#tgl_lahir').val(data.tgl_lahir);
                $('#no_telp').val(data.no_telp);
                $('#alamat').val(data.alamat);
                $('#no_identitas').val(data.no_identitas);
                $('#jenis_identitas').val(data.jenis_identitas);
                $('#id_pelanggan').val(data.id_pelanggan);
            }
        });
    });

    // function transaksi
    $('.tombolTambahDataTransaksi').on('click', function() {
        $('#judulModal').html('Tambah Data');
        $('#tgl_peminjaman').val('');
        $('#id_pelanggan').val('');
        $('#id_ps').val('');
        $('#harga_sewa').val('');
        $('#lama_peminjaman').val('');
        $('#tunai').val('');
        $('#total_harga').val('');
        $('#kembalian').val('');
        $('#status_peminjaman').val('');
        $('.modal-body form').attr('action', '/admin/transaksi/save');
        $('.modal-footer button[type=submit').html('Tambah Data');
    });
    $('.tampilModalUbahTransaksi').on('click', function() {
        $('#judulModal').html('Ubah Data');
        $('.modal-footer button[type=submit').html('Ubah Data');
        $('.modal-body form').attr('action', '/admin/transaksi/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: '/admin/transaksi/edit',
            data: {id : id},
            method: 'post',
            dataType:'json',
            success:function(data){
                $('#tgl_peminjaman').val(data.tgl_peminjaman);
                $('#id_pelanggan').val(data.id_pelanggan);
                $('#id_ps').val(data.id_ps);
                $('#harga_sewa').val(data.harga_sewa);
                $('#lama_peminjaman').val(data.lama_peminjaman);
                $('#tunai').val(data.tunai);
                $('#total_harga').val(data.total_harga);
                $('#kembalian').val(data.kembalian);
                $('#status_peminjaman').val(data.status_peminjaman);
                $('#no_transaksi').val(data.no_transaksi);
            }
        });
    });

});

$(document).ready(function() {
    $('#id_ps').change(function() {
        var idPs = $(this).val();
    
        $.ajax({
            url: '/admin/transaksi/getHargaSewa',
            type: 'POST',
            data: {
                id_ps: idPs
            },
            dataType: 'json',
            success: function(response) {
                if (response) {
                    $('#harga_sewa').val(response.harga_sewa);
                } else {
                    $('#harga_sewa').val('Tidak ada harga sewa tersedia');
                }
            }
        });
    });
    
    $('#lama_peminjaman').change(function() {
        var idPs = $('#id_ps').val(); // Mengambil nilai id_ps dari select dengan id id_ps
        var lamaPeminjaman = $(this).val();
        
        // Mengirim permintaan Ajax untuk mendapatkan data harga sewa berdasarkan id_ps
        $.ajax({
            url: '/admin/transaksi/getHargaSewa',
            type: 'POST',
            data: {
                id_ps: idPs
            },
            dataType: 'json',
            success: function(response) {
                if (response) {
                    var hargaSewa = response.harga_sewa;
                    var totalHarga = hargaSewa * lamaPeminjaman;
                    $('#total_harga').val(totalHarga);
                } else {
                    $('#total_harga').val('');
                }
            }
        });
    });

    $('#tunai').keyup(function() {
        var tunai = $(this).val();
        var totalHarga = $('#total_harga').val();
        
        if (tunai === '' || tunai === '0') {
            $('#kembalian').val('0');
        } else {
            var kembalian = tunai - totalHarga;
            $('#kembalian').val(kembalian);
        }
    });
});


window.addEventListener('scroll', function() {
var navbar = document.querySelector('.nav-home');
var logo = document.querySelector('.navbar-brand');
var menuItems = document.querySelectorAll('.nav-item');

if (window.scrollY > navbar.offsetTop) {
    navbar.classList.add('navbar-scrolled');
    logo.classList.add('navbar-brand-scrolled');
    menuItems.forEach(function(item) {
    item.classList.add('nav-item-scrolled');
    });
} else {
    navbar.classList.remove('navbar-scrolled');
    logo.classList.remove('navbar-brand-scrolled');
    menuItems.forEach(function(item) {
    item.classList.remove('nav-item-scrolled');
    });
}
});

// Mendapatkan URL halaman saat ini
    var currentLocation = window.location.href;

    // Mengambil semua tautan pada menu navigasi
    var navLinks = document.getElementsByClassName('nav-link');

    // Mengiterasi melalui tautan-tautan dan mengecek apakah URL tautan sama dengan URL halaman saat ini
    for (var i = 0; i < navLinks.length; i++) {
    if (navLinks[i].href === currentLocation) {
    // Jika tautan memiliki URL yang sama dengan URL halaman saat ini, tambahkan kelas "active"
    navLinks[i].classList.add('active');
    }
}






