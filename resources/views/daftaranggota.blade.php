<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Anggota</title>
    <style>
        body {
            font-family: 'Lexend Deca', sans-serif;
            margin: 0 auto;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
            max-width: 30%;
        }
        .bg-form {
            background-color: #0C014F;
            padding: 40px 40px;
        }
        .main-container {
            position: relative;
            background-color: #FFFFFF;
            width: 550px;
            height: 700px;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #CCCCCC;
            border-radius: 5px;
        }
        .form-group input[type="file"] {
            padding: 0;
            width: 250px;
        }
        .submit-btn {
            position: absolute;
            bottom: 10px;
            right: 20px;
            width: 15%;
            padding: 10px;
            border: none;
            background-color: #0C014F;
            color: #FFFFFF;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #04010D;
        }
        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="bg-form">
        <div class="main-container">
            <h1 class="form-title">FORM PENDAFTARAN MEMBER</h1>
            <p class="center-text">Isikan data-data anda secara lengkap pada lampiran dibawah ini:</p>
            <form action="{{ route('daftaranggota.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="asal">Asal</label>
                    <input type="text" id="asal" name="asal" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label for="no_tlp">No. Telepon</label>
                    <input type="text" id="no_tlp" name="no_tlp" required>
                </div>
                <div class="form-group">
                    <label for="upload_foto">Upload Foto</label>
                    <input type="file" id="upload_foto" name="upload_foto" accept="image/*" required>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
