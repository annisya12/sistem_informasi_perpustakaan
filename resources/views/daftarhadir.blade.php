<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hadir</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #0C014F;
            color: #000;
            font-family: Arial, sans-serif;
        }
        .main-container {
            background-color: #0C014F;
            width: 100%;
            max-width: 1270px;
            height: 100vh;
            position: relative;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 30px;
        }
        .inner-container {
            background-color: #FFFFFF;
            width: 100%;
            max-width: 990px;
            height: auto;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .form-group input {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #CCCCCC;
            border-radius: 5px;
        }
        .form-group input[type="file"] {
            padding: 0;
            width: 150px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="inner-container">
            <h1 class="form-title">Daftar Hadir</h1>
            <p>Isikan data-data anda secara lengkap pada lampiran dibawah ini:</p>
            <form action="{{ route('daftarhadir.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" value="{{ old('Nama') }}" id="name" name="Nama">
                </div> 
                <div class="form-group">
                    <label for="school">Asal</label>
                    <input type="text" value="{{ old('Asal') }}" id="school" name="Asal">
                </div> 
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" value="{{ old('Alamat') }}" id="address" name="Alamat">
                </div>
                <div class="form-group">
                    <label for="tmpt">Tempat Lahir</label>
                    <input type="text" value="{{ old('Tempat_lahir') }}" id="tmpt" name="Tempat_lahir">
                </div>
                <div class="form-group">
                    <label for="dob">Tanggal Lahir</label>
                    <input type="date" value="{{ old('Tanggal_lahir') }}" id="dob" name="Tanggal_lahir">
                </div>
                <button type="submit" class="submit-btn">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>
