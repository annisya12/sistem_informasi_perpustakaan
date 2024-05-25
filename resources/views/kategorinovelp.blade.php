<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Novel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/kategorinovel.css">
</head>
<style> 
 /* Menghilangkan garis bawah dari tautan */
    .nav-item.dropdown a {
        text-decoration: none;
        border-bottom: none;
    }

    /* Mengubah gambar profil menjadi bulat */
    .img-circle {
        border-radius: 50%; /* Membuat gambar menjadi bentuk bulat */
    }
    .card-body a {
    text-decoration: none; /* Menghilangkan garis bawah pada tautan */
    color: black; /* Mengubah warna teks menjadi hitam */
}

.card-body a:hover {
    color: gray; /* Mengubah warna teks menjadi abu-abu ketika dihover */
}

    .card-body img {
    cursor: pointer; /* Mengubah kursor menjadi tanda tangan ketika diarahkan */
}

.card-body img:hover {
    filter: brightness(80%); /* Mengurangi kecerahan gambar ketika kursor diarahkan */
}

.card-body img:focus {
    outline: none; /* Menghapus garis bawah saat gambar mendapatkan fokus */
}
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin-right: 20px; display: inline-block;">
                <img src="assets/img/SIPerpus.png" alt="" width="40" height="34" class="d-inline-block align-text-top" style="vertical-align: middle;">
                <span style="vertical-align: middle;">SIPerpus</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar text-white">
                <h4>
                    <img src="assets/img/cari.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    <a href="{{ url('/dashpengunjung') }}" style="color: white; text-decoration: none;">Pencarian</a>
                </h4>
                <h4>
                    <img src="assets/img/ebook.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    <a href="{{ url('/dashkategorip') }}" style="color: white; text-decoration: none; background-color: #a27bd8;">Kategori</a>
                </h4>
                <h4>
                    <img src="assets/img/help.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    <a href="{{ url('/bantuanpengunjung') }}" style="color: white; text-decoration: none;">Bantuan</a>
                </h4>
                <h4>
                    <img src="assets/img/log.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#logoutModal" style="color: white; text-decoration: none;">Keluar</a>
                </h4>
            </div>
            <div class="col-10 main-content">
                <div class="card bg-white mb-3" id="mainCard1">
                    <div class="card-body">
                        <h4 class="card-title kategori">Novel</h4>
                        <div style="display: inline-block; text-align: center; margin-right: 50px; margin-left:90px">
                            <a href="detailbuku">
                                <img src="assets/img/13.png" alt="" width="200" height="250">
                            <p>Si Putih</p>
                            </a>
                        </div>
                        <div style="display: inline-block; text-align: center; margin-right: 40px; margin-left:40px">
                            <a href="#">
                            <img src="assets/img/pergi.png" alt="" width="200" height="250">
                            <p>Novel Yang Telah Pergi Lama</p>
                            </a>
                        </div>
                        <div style="display: inline-block; text-align: center; margin-right: 70px; margin-left:45px">
                            <a href="#">
                            <img src="assets/img/ayah.png" alt="" width="200" height="250">
                            <p>Novel Narasi Perihal Ayah</p>
                            </a>
                        </div>
                        <div style="text-align: center; margin-top: 40px;">
                            <div style="display: inline-block; text-align: center; margin-right: 50px; margin-left: 60px">
                                <a href="#">
                                <img src="assets/img/ancika.png" alt="" width="200" height="250">
                                <p>Ancika; dia yang bersamaku 1995</p>
                                </a>
                            </div>
                            <div style="display: inline-block; text-align: center; margin-right: 50px; margin-left:45px">
                                <a href="#">
                                    <img src="assets/img/2.png" alt="" width="200" height="250">
                                <p>Jodoh Terbaik</p>
                                </a>
                                
                            </div>
                            <div style="display: inline-block; text-align: center; margin-right: 65px; margin-left:30px">
                                <a href="#">
                                <img src="assets/img/manusia.png" alt="" width="200" height="250">
                                <p>Novel Gagal Menjadi Manusia </p>
                                </a>
                            </div>
                        </div>
                        <div style="text-align: center; margin-top: 40px;">
                            <div style="display: inline-block; text-align: center; margin-right: 50px; margin-left:70px">
                                <a href="#">
                                <img src="assets/img/anaktengah.png" alt="" width="200" height="250">
                                <p>Novel Iyan Bukan Anak Tengah</p>
                                </a>
                            </div>
                            <div style="display: inline-block; text-align: center; margin-right: 40px; margin-left:40px">
                                <a href="#">
                                <img src="assets/img/pulang.png" alt="" width="200" height="250">
                                <p>Buku Novel Pulang</p>
                                </a>
                            </div>
                            <div style="display: inline-block; text-align: center; margin-right: 70px; margin-left:45px">
                                <a href="#">
                                <img src="assets/img/azzammine.png" alt="" width="200" height="250">
                                <p>Azzammine</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-logout fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <h2 class="text-black pb-4 text-center pt-4">Yakin keluar ?</h2>
                            <div class="row mb-2">
                                <div class="col-md-4 text-right">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="margin-left: 200px;">Tidak</button>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-left">
                                    <button class="btn btn-success" onclick="redirectToDash()">Ya</button>
                                </div>
                            </div>
                            <div class="w-100 text-center">
                                <img src="assets/img/logout.png" width="70%" alt="Logout">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function redirectToDash() {
        // Mengarahkan pengguna ke halaman dash
        window.location.href = "dash";
    }
    </script>
</body>
</html>
