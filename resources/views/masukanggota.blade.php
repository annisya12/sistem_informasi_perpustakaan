<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Member</title>
    <!-- Link Bootstrap CSS versi 5.3.3 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-image: url('assets/img/loginmember.png');
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            text-align: center;
            font-family: 'Lexend Deca', sans-serif; /* Menambahkan font Lexend Deca */
        }

        .container {
            background-color: #00000080;
            padding: 40px;
            border-radius: 20px;
            width: 900px; /* Mengatur lebar container */
            height: 300px; /* Mengatur tinggi container */
        }

        p {
            font-size: 24px; /* Mengatur ukuran teks paragraf */
            line-height: 1.5; /* Mengatur jarak antara baris teks */
            margin-bottom: 20px; /* Mengatur jarak bawah antara paragraf dan elemen berikutnya */
        }

        input[type="text" i] {
            padding-block: 2px;
            padding-inline: 3px;
            width: 300px; /* Mengatur lebar input */
            height: 30px; /* Mengatur tinggi input */
            border: 1px solid transparent; /* Menghilangkan outline dengan border transparan */
            border-radius: 30px; /* Mengatur sudut melengkung */
            padding-inline-start: 10px; /* Menambahkan jarak kiri */
        }

        h1 {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: blue;
            color: white; /* Warna teks (putih) */
            width: 300px; /* Lebar tombol */
            height: 50px; /* Tinggi tombol */
            font-size: 20px; /* Ukuran font teks tombol */
        }

    </style>
    <!-- Link Font Lexend Deca (jika belum terhubung) -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di SIPerpus</h1>
        <p>Cukup masukkan NIK Anda untuk masuk sebagai member</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf <!-- Tambahkan CSRF token untuk keamanan -->
            <div class="form-group">
                <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK Anda">
            </div>
            <button type="submit" class="btn btn-primary btn-lg" style="width: 300px;">Masuk</button>
        </form>
    </div>

    <!-- Link Bootstrap JS (optional, for components that require JS) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    // Pesan dengan SweetAlert
    @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif
</script>
</body>
</html>
