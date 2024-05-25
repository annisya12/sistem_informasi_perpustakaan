<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashkategori.css">
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
     /* Menghilangkan garis bawah dari tautan */
    .card-body a {
        text-decoration: none;
        color: inherit; /* Mewarisi warna teks dari konteksnya (dalam hal ini, warna teks default) */
    }

    /* Mengubah kursor menjadi tangan saat mengarahkan mouse ke tautan */
    .card-body a:hover {
        cursor: pointer;
    }

    /* Menambahkan efek hover pada gambar */
    .card-body a:hover img {
        background-color: #f0f0f0; /* Ubah warna latar belakang gambar saat kursor mengarah ke gambar */
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
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a id="searchLink" class="nav-link cari-link d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#searchModal" style="font-size: 22px; background-color: white; padding: 3px 70px; border-radius: 20px; text-decoration: none;">
                        <img src="assets/img/Search.png" alt="" width="23" height="23" class="d-inline-block align-text-top img-circle" style="margin-right: 5px;">
                        <span style="vertical-align: middle;">Cari</span>
                    </a>
            </li>
            </ul>
                 <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
    <li class="nav-item dropdown">
        <a id="profileLink" class="mt-1 profile-pic" href="{{ url('/profilemember') }}" aria-expanded="false">
            <img src="assets/img/fotomember.jpg" alt="user-img" width="25" class="img-circle">
            <span style="color: white;">Member</span>
        </a>
    </li>
</ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar text-white">
                <h4>
                    <img src="assets/img/cari.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    <a href="{{ url('/dashmember') }}" style="color: white; text-decoration: none;">Pencarian</a>
                </h4>
                <h4>
                    <img src="assets/img/ebook.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    <a href="#" style="color: white; text-decoration: none; background-color: #a27bd8;">Kategori</a>
                </h4>
                <h4>
                    <img src="assets/img/pinjam.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    <a href="{{ url('/formdatapinjam') }}" style="color: white; text-decoration: none;">Peminjaman</a>
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
                <div class="card bg-white mb-3" id="mainCard2">
                    <div class="card-body">
                        <h4 class="card-title kategori">Kategori</h4>
                        <div style="display: inline-block; text-align: center; margin-right: 50px; margin-left:90px">
                            <a href="#">
                            <img src="assets/img/komik.png" alt="" width="200" height="200">
                            <p>Komik</p>
                            </a>
                        </div>
                        <div style="display: inline-block; text-align: center; margin-right: 45px; margin-left:45px">
                            <a href="kategorinovel">
                            <img src="assets/img/novel.png" alt="" width="200" height="200">
                            <p>Novel</p>
                            </a>
                        </div>
                        <div style="display: inline-block; text-align: center; margin-right: 70px; margin-left:45px">
                            <a href="#">
                            <img src="assets/img/kamus.png" alt="" width="200" height="200">
                            <p>Kamus</p>
                            </a>
                        </div>
                        <div style="text-align: center; margin-top: 40px;">
                            <div style="display: inline-block; text-align: center; margin-right: 50px; margin-left:90px">
                                <a href="#">
                                <img src="assets/img/bukusejarah.png" alt="" width="200" height="200">
                                <p>Buku Sejarah</p>
                                </a>
                            </div>
                            <div style="display: inline-block; text-align: center; margin-right: 45px; margin-left:45px">
                                <a href="#">
                                <img src="assets/img/ensiklopedia.png" alt="" width="200" height="200">
                                <p>Ensiklopedia</p>
                                </a>
                            </div>
                            <div style="display: inline-block; text-align: center; margin-right: 70px; margin-left:45px">
                                <a href="#">
                                <img src="assets/img/biografi.png" alt="" width="200" height="200">
                                <p>Biografi</p>
                                </a>
                            </div>
                        <div style="text-align: center; margin-top: 40px;">
                            <div style="display: inline-block; text-align: center; margin-right: 50px; margin-left:90px">
                                <a href="#">
                                <img src="assets/img/laporanpenelitian.png" alt="" width="200" height="200">
                                <p>Laporan Penelitian</p>
                                </a>
                            </div>
                            <div style="display: inline-block; text-align: center; margin-right: 45px; margin-left:45px">
                                <a href="#">
                                <img src="assets/img/antologi.png" alt="" width="200" height="200">
                                <p>Antologi</p>
                                </a>
                            </div>
                            <div style="display: inline-block; text-align: center; margin-right: 70px; margin-left:45px">
                                <a href="#">
                                <img src="assets/img/kdongeng.png" alt="" width="200" height="200">
                                <p>Dongeng</p>
                                </a>
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
            <div class="modal modal-logout fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukkan judul buku..." id="searchInput">
                                <button class="btn btn-primary" type="button" id="searchButton">Cari</button>
                            </div>
                            <!-- Tempat untuk menampilkan hasil pencarian -->
                            <div id="searchResults"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Menangani klik tombol pencarian
        document.getElementById("searchButton").addEventListener("click", function() {
            // Mendapatkan nilai input pencarian
            var searchTerm = document.getElementById("searchInput").value;

            // Lakukan pencarian hanya jika input tidak kosong
            if (searchTerm.trim() !== "") {
                // Kirim permintaan pencarian ke server (misalnya, menggunakan AJAX)
                // Di sini, Anda dapat menggunakan fetch atau library AJAX seperti jQuery AJAX untuk mengirim permintaan ke server

                // Contoh menggunakan fetch
                fetch("/search?query=" + encodeURIComponent(searchTerm))
                    .then(response => response.json())
                    .then(data => {
                        // Memperbarui tampilan dengan hasil pencarian
                        displaySearchResults(data);
                    })
                    .catch(error => console.error('Error:', error));
            }
        });

        // Fungsi untuk menampilkan hasil pencarian
        function displaySearchResults(results) {
            // Dapatkan elemen div tempat untuk menampilkan hasil pencarian
            var searchResultsContainer = document.getElementById("searchResults");
            // Bersihkan konten sebelum menambahkan hasil baru
            searchResultsContainer.innerHTML = "";

            // Periksa apakah ada hasil yang ditemukan
            if (results.length > 0) {
                // Jika ada hasil, buat elemen untuk setiap hasil
                results.forEach(function(result) {
                    // Buat elemen baru untuk menampilkan setiap hasil
                    var resultElement = document.createElement("div");
                    resultElement.textContent = result.title; // Misalnya, tampilkan judul buku

                    // Tambahkan elemen hasil ke dalam kontainer hasil pencarian
                    searchResultsContainer.appendChild(resultElement);
                });
            } else {
                // Jika tidak ada hasil ditemukan, tampilkan pesan kosong
                searchResultsContainer.textContent = "Tidak ada hasil ditemukan.";
            }
        }
    </script>
    
    <script type="text/javascript">
    function redirectToDash() {
        // Mengarahkan pengguna ke halaman dash
        window.location.href = "dash";
    }
    </script>
</body>
</html>
