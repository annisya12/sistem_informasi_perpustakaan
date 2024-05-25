<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/ready.css">
    <link rel="stylesheet" href="assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header bg-primary">
            <div class="logo-header">
                <a style="color: white;" class="logo">
                    <img class="Engineering41" style="width: 40px; height: 40px" src="assets/img/engineering.png" />
                    <span style="color: white;">SIPerpus</span>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <form class="navbar-left mt-2 navbar-form nav-search mr-md-3" id="searchForm">
                        <div class="input-group">
                            <input type="text" id="searchInput" placeholder="Cari" class="form-control">
                            <div class="input-group-append" id="search">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>

        <div class="sidebar bg-primary text-white">
            <div class="user">
                <div class="info">
                    <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true"></a>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a href="" style="background-color: #a27bd8;">
                        <img src="assets/img/cari.png" width="25" style="margin-right: 10px; margin-top: 20px;" alt="" srcset="">
                        <span style="color: white; margin-top: 20px;">Pencarian</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/dashkategorip') }}">
                        <img src="assets/img/ebook.png" width="25" style="margin-right: 10px;">
                        <span style="color: white;">Kategori</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('/bantuanpengunjung') }}">
                        <img src="assets/img/help.png" width="25" style="margin-right: 10px;">
                        <span style="color: white;">Bantuan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <img src="assets/img/log.png" width="25" style="margin-right: 5px; margin-left: 5px;">
                        <span style="color: white;">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>        
    

        <div class="main-panel">
            <div class="content bg-info">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="background-color: #AE95D0; background-image: url('assets/img/BGbintang.png');">
                                <div class="card-body">
                                    <div class="media">
                                        <img src="assets/img/selamat.png" style="margin-left: 50px" width="100px" class="align-self-center mr-3" alt="...">
                                        <div class="media-body text-start" style="color: #fff; font-weight: bold; margin: 2rem;">
                                            <h4 style="color: #fff; font-weight: bold;">SELAMAT DATANG SELAMAT MEMBACA</h4>
                                            <p>Membaca itu tidak membuat kita “menjadi bangsa kelas teri”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-header">
                                    <h4 class="card-title">Rekomendasi</h4>
                                </div>
                                <div class="card-body" id="bookContainer">
                                    <div class="row" id="bookRow">
                                        <?php
$json_data = file_get_contents(base_path('resources/book.json'));
$books = json_decode($json_data, true);

foreach ($books as $book) {
    \App\Models\Buku::updateOrCreate(
        ['judul_buku' => $book['judul']],
        [
            'pengarang' => $book['penulis'],
            'tahun_terbit' => $book['tahun_terbit'],
            'jumlah_halaman' => $book['jumlah_halaman'],
            'created_at' => now(),
            'updated_at' => now(),
        ]
    );
}
?>

<div class="col-md-4">
    <div class="card" style="width: 10rem;">
        <img src="<?php echo $book['cover']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $book['judul']; ?>
            </h5>
            <p class="card-text">
                Penulis: <?php echo $book['penulis']; ?><br>
                Tahun Terbit: <?php echo $book['tahun_terbit']; ?><br>
                Genre: <?php echo $book['genre']; ?><br>
                Jumlah Halaman: <?php echo $book['jumlah_halaman']; ?>
            </p>
        </div>
    </div>
</div>

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
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-left">
                                <button class="btn btn-success" onclick="redirectToDashboard()">Ya</button>
                            </div>
                        </div>
                        <div class="w-100 text-center">
                            <img src="assets/img/logout.png" width="70%" alt="Logout">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body modal-body-warning">
                        <div class="row d-flex align-items-center padding-warning">
                            <div class="col-md-4 text-center">
                                <img src="{{asset('assets/img/tidak.png')}}" width="150px"></img>
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-black"><b>Maaf! Buku yang anda cari tidak tersedia</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugin/chartist/chartist.min.js"></script>
    <script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/js/ready.min.js"></script>
    <script>
        // Fungsi untuk menampilkan pop up
        function closeDialog(){
            $('#exampleModal').modal('hide');
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Mendapatkan referensi ke elemen input pencarian
            const searchInput = document.getElementById('searchInput');

            // Mendapatkan referensi ke kontainer baris buku
            const bookRow = document.getElementById('bookRow');

            // Fungsi untuk melakukan pencarian buku
            function searchBooks() {
                const searchTerm = searchInput.value.toLowerCase();

                // Memfilter buku berdasarkan judul
                const filteredBooks = <?php echo $json_data; ?>.filter(function (book) {
                    return book.judul.toLowerCase().includes(searchTerm);
                });


                // Memperbarui tampilan kontainer baris buku dengan hasil pencarian
                updateBookRow(filteredBooks);
            }


            // Fungsi untuk memperbarui tampilan kontainer baris buku dengan hasil pencarian
            function updateBookRow(books) {
                // Menghapus semua elemen buku sebelumnya
                bookRow.innerHTML = '';
                if(books.length == 0 ){
                    $('#exampleModal').modal('show');

                    // Tutup pop up otomatis 5 detik
                    setTimeout(() => {
                        $('#exampleModal').modal('hide');
                    }, 4000);
                }

                // Menambahkan kembali elemen buku berdasarkan hasil pencarian
                books.forEach(function (book) {
                    const card = `
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img src="${book.cover}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">${book.judul}</h5>
                                    <p class="card-text">
                                        Penulis: ${book.penulis}<br>
                                        Tahun Terbit: ${book.tahun_terbit}<br>
                                        Genre: ${book.genre}<br>
                                        Jumlah Halaman: ${book.jumlah_halaman}
                                    </p>
                                </div>
                            </div>
                        </div>
                    `;
                    bookRow.insertAdjacentHTML('beforeend', card);
                });
            }

            var typingTimer;
            var doneTypingInterval = 500; // Waktu penundaan dalam milidetik setelah pengguna selesai mengetik
            $('#searchInput').on('keyup', function () {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
            });

            function doneTyping(){
                    searchBooks(); // Melakukan pencarian buku
            }

            // Melakukan pencarian buku secara otomatis saat halaman dimuat
            searchBooks();
        });

        function redirectToDashboard() {
            $('#logoutModal').modal('hide');
            window.location.href = 'dash';
        }
    </script>
</body>

</html>
