<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #0C014F;
            color: white;
        }

        .sidebar {
            background-color: #0C014F;
            height: 110vh;
            border-right: 2px solid white;
        }

        .navbar {
            background-color: #0C014F;
            border-bottom: 2px solid white;
        }

        .main-content {
            position: relative;
            z-index: 2;
            background-color: #0C014F;
            width: 920px;
            height: 600px;
            padding: 20px;
            border-radius: 10px;
            margin-top: 0;
            margin-left: 30px;
        }

        .container-fluid {
            padding-left: 20px;
            padding-right: 20px;
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .col-2.sidebar {
            padding-right: 15px;
        }

        .navbar-brand span {
            font-family: 'Inter', sans-serif;
            font-weight: black;
            font-size: 23px;
        }

        .container {
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            display: flex;
            align-items: center;
        }

        .text-wrapper {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .text-wrapper p {
            margin: 0;
        }

        .table-wrapper {
            width: auto;
            max-height: 100px;
            margin-left: 0;
        }

        #fileInput {
            display: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 0;
        }

        th,
        td {
            border: 1px solid #DEF5FF;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #DEF5FF;
            color: black;
        }

        tbody {
            background-color: white;
            color: black;
        }

        .upload-btn {
            background-color: white;
            color: black;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        .upload-btn:hover {
            background-color: #DEF5FF;
            color: black;
        }

        .choose-file-btn {
            background-color: white;
            color: black;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .choose-file-btn:hover {
            background-color: #DEF5FF;
            color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-right: 20px;">
                <img src="assets/img/SIPerpus.png" alt="" width="40" height="34" class="d-inline-block align-text-top" style="vertical-align: middle;">
                <span style="vertical-align: middle;">SIPerpus</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profilepetugas') }}" style="margin-left: auto;">
                            <span style="margin-left: 5px;">
                                <img src="assets/img/fotopetugas.jpg" alt="" width="30" height="30" style="margin-right: 5px;" class="d-inline-block align-text-top">
                            </span>
                            <span>Petugas</span>
                        </a>
                    </li>
                </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar">
                <a href="dashpetugas" class="mt-3" style="display: block; text-decoration: none; color: inherit; padding: 10px;">
                    <img src="assets/img/kelola.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    Kelola Data
                </a>
                <a href="#" class="mt-3" style="background-color: #a27bd8; display: block; text-decoration: none; color: inherit; padding: 10px;">
                    <img src="assets/img/laporan.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                    Laporan
               <a href="#" class="mt-3" data-bs-toggle="modal" data-bs-target="#logoutModal"
                    style="display: block; text-decoration: none; color: inherit; padding: 10px;">
                    <img src="assets/img/log.png" alt="" width="24" height="24"
                        class="d-inline-block align-text-top">
                    Keluar
                </a>
            </div>

            <div class="col-9">
                <div class="main-content">
                    <!-- Table for uploaded files -->
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>Ukuran File</th>
                                <th>Tanggal Upload</th>
                            </tr>
                        </thead>
                        <tbody id="fileTableBody">
                           @foreach($uploads as $upload)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <!-- Tautan untuk menampilkan file -->
                                       <a href="{{ url('uploads/' . $upload->filename) }}" target="_blank">{{ $upload->original_name }}</a>
                                    </td>
                                    <td>{{ number_format($upload->file_size / 1024, 2) }} KB</td>
                                    <td>{{ $upload->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <form id="uploadForm" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="file" id="fileInput" name="fileInput" onchange="handleFileSelect(event)">
        <button type="button" class="choose-file-btn" onclick="document.getElementById('fileInput').click()">Choose File</button>
    </div>
    <!-- Menampilkan nama file yang dipilih -->
    <div id="selectedFile"></div>
    <button type="submit" class="upload-btn btn-custom">Upload</button>
</form>

                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-logout fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <h2 class="text-black pb-4 text-center pt-4">Yakin keluar?</h2>
                <div class="row mb-2">
                    <div class="col-md-4 text-right">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="margin-left: 200px;">Tidak</button>
                    </div>
                    <div class="col-md-4"></div>
                    <!-- HTML -->
<div class="col-md-4 text-left">
    <button class="btn btn-success mr-2" style="margin-right: 10px;" onclick="redirectToDash()">Ya</button>
</div>

                </div>
                <div class="w-100 text-center">
                    <img src="{{ asset('assets/img/logout.png') }}" width="70%" alt="Logout">
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-nzIEwmCYrCmhA6MOkk/5X5nqzEB7Q6ujznG/22aW6cfcXzj4KV9urk4vYg1CSm8T" crossorigin="anonymous"></script>
    <script>
        function handleFileSelect(event) {
    const fileInput = event.target;
    const files = fileInput.files;
    const file = files[0];

    // Menampilkan informasi file
    displayFileInfo(file);

    // Menampilkan nama file yang dipilih
    document.getElementById('selectedFile').innerText = 'Selected File: ' + file.name;
}

function downloadFile(filename) {
    // Membuat URL ke file yang ingin diunduh
    const fileURL = `/uploads/${filename}`;
    // Membuka tautan file di tab atau jendela baru
    window.open(fileURL, '_blank');
}


function displayFileInfo(file) {
    const tableBody = document.getElementById('fileTableBody');
    const newRow = tableBody.insertRow();
    const cellNo = newRow.insertCell(0);
    const cellName = newRow.insertCell(1);
    const cellSize = newRow.insertCell(2);
    const cellDate = newRow.insertCell(3);

    cellNo.innerText = tableBody.rows.length;
    cellName.innerText = file.name;
    cellSize.innerText = (file.size / 5024).toFixed(2) + ' KB'; // corrected file.size
    cellDate.innerText = new Date().toLocaleDateString();
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
