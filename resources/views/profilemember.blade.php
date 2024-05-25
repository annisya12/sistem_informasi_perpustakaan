<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Member</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/profilmember.css">
</head>

<body>
    <div class="container">
        <div class="maincontent">
            <div class="rounded-image text-center">
                <img src="assets/img/member.jpg" alt="Gambar Kartu Member" style="width: 900px;">
            </div>
            <div class="text-end mt-3">
                <button class="btn btn-primary" style="margin-right: 200px;" onclick="goBack()">Kembali</button>
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
