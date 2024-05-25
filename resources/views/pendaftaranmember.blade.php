<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Member</title>
    <link href="pendaftaranmember.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="body-color">

        <div class="container bg-white rounded-4 mt-5 mb-5">
                <div class="judul text-center" style="padding-top: 50px;">
                    <h1>FORM PENDAFTARAN MEMBER</h1>
                </div>
                <div class="sub_judul text-center">
                    <p>isikan data-data anda secara lengkap pada lampiran dibawah ini:</p>
                </div>
            <div class="formulir">
                <form>
                    <div class="w-75 m-auto mt-5">
                        <label for="validationcutom01" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="validationcutom01" aria-describedby="emailHelp" required>
                    </div>
                    <div class="w-75 m-auto mt-5">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="w-75 m-auto mt-5">
                        <label for="exampleInputAlamat" class="form-label">Alamat</label>
                        <input type="alamat" class="form-control" id="exampleInputAlamat" aria-describedby="emailHelp" required>
                    </div>
                    <div class="w-75 m-auto mt-5">
                        <label for="exampleInputSekolah" class="form-label">Asal</label>
                        <input type="text" class="form-control" id="exampleInputSekolah" aria-describedby="emailHelp" required>
                    </div>
                    <div class="w-75 m-auto mt-5">
                        <label for="exampleInputTlp" class="form-label">No. Tlp</label>
                        <input type="text" class="form-control" id="exampleInputTlp" aria-describedby="emailHelp" required>
                    </div>
                    <div class="w-75 m-auto mt-5">
                        <label for="exampleInputFile" class="form-label">Upload Foto</label>
                        <input type="file" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="w-75 m-auto mt-5">
                        <div class="col-md-12" >
                        <button type="submit" class=" btn-lg btn-ungu text-end">Masuk</button>
                    </div>
                </form>
            </div>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
