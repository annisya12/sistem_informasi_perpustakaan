<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kelola Data Aktivitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Lexend Deca", sans-serif;
            background-color: #0C014F;
        }

        .btn-ungu {
            background-color: #5737B7;
            color: white;
            border: 0;
            border-radius: 5px;
            padding: 9px;
            margin-left: 92%;
            margin-bottom: 20px;
        }
    </style>
    <script>
        function updateEndDate() {
            var startDate = document.getElementById('exampleInputTglPeminjaman').value;
            if (startDate) {
                var endDate = new Date(startDate);
                endDate.setDate(endDate.getDate() + 7);
                var day = ("0" + endDate.getDate()).slice(-2);
                var month = ("0" + (endDate.getMonth() + 1)).slice(-2);
                var year = endDate.getFullYear();
                document.getElementById('exampleInputTglPeminjamanEnd').value = year + "-" + month + "-" + day;
            }
        }
    </script>
</head>

<body>
    <div class="container bg-white rounded-4 mt-5 mb-5">
        <div class="judul text-center" style="padding-top: 50px;">
            <h1>FORM KELOLA DATA AKTIVITAS</h1>
        </div>
        <div class="sub_judul text-center">
            <p>Isikan data-data Anda secara lengkap pada lampiran di bawah ini:</p>
        </div>
        <div class="formulir">
            <form action="{{ route('store.submit') }}" method="POST">
                @csrf
                <div class="w-75 m-auto mt-5">
                    <label for="inputNik" class="form-label">Nik</label>
                    <input type="text" name="Nik" class="form-control" id="inputNik" required>
                </div>
                <div class="w-75 m-auto mt-5">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" name="Nama" class="form-control" id="inputNama" required>
                </div>
                <div class="w-75 m-auto mt-5">
                    <label for="exampleInputJudulBuku" class="form-label">Judul Buku</label>
                    <input type="text" name="Judul_Buku" class="form-control" id="exampleInputJudulBuku" required>
                </div>
                <div class="w-75 m-auto mt-5">
                    <label for="exampleInputTglPeminjaman" class="form-label">Tanggal Peminjaman</label>
                    <input type="date" name="Tgl_Peminjaman" class="form-control" id="exampleInputTglPeminjaman"
                        onchange="updateEndDate()" required>
                </div>
                <div class="w-75 m-auto mt-5">
                    <label for="exampleInputTglPeminjamanEnd" class="form-label">Tanggal Akhir Peminjaman</label>
                    <input type="date" name="Tgl_Peminjaman_End" class="form-control"
                        id="exampleInputTglPeminjamanEnd" readonly required>
                </div>
                <div class="w-75 m-auto mt-5">
                    <label for="exampleInputTglPengembalian" class="form-label">Tanggal Pengembalian</label>
                    <input type="date" name="Tgl_Pengembalian" class="form-control" id="exampleInputTglPengembalian"
                        required>
                </div>
                <div class="w-75 m-auto mt-5">
                    <button type="submit" class="btn-lg btn-ungu text-end">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
