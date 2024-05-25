<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bantuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .content {
            padding: 50px;
        }

        /* Menjadikan teks pada elemen <p> menjadi rata kiri-kanan */
        p {
            text-align: justify;
        }

        /* Menambahkan gaya untuk tombol kembali */
        .back-btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #2d81da;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
			margin-right: 500px;
			margin-top: 100px;
        }

        /* Menambahkan efek hover untuk tombol kembali */
        .back-btn:hover {
            background-color: #7bade1;
        }
    </style>
</head>

<body>

    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/engineering.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top" />
                <span class="" style="font-weight: 600; font-size: 25px">
                    SIPerpus
                </span>
                <br />
                <h5 style="font-size: 1.5em; width: 300px; display: inline-block; border-bottom: 4px solid black; margin-top: 20px;">
                    Kontak Kami
                </h5>
                <h5>Alamat</h5>
                <p>Jl. Kemangi No. 56 Jakarta</p>
                <h5>Telepon</h5>
                <p>081456658664</p>
                <h5>Email</h5>
                <p>siperpus@gmail.com</p>
            </div>

            <div class="col-md-6">
                <br />
                <h5 style="font-size: 1.5em; width: 300px; display: inline-block; border-bottom: 4px solid black; margin-top: 35px;">
                    Jam Operasi Layanan
                </h5>
                <h5>Senin - Sabtu:</h5>
                <p>Buka : 08.00 - 15.00 WIB</p>
                <p>Istirahat : 12.00 - 13.00 WIB</p>
                <h5>Minggu Libur, Tanggal Merah Libur</h5>

                <!-- Tambahkan tombol kembali -->
                <button class="btn btn-primary" style="margin-right: 200px; margin-top:50px;" onclick="goBack()">Kembali</button>
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
