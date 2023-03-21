<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 5 & 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-black">
    <div style="height: 100vh" class="container d-flex justify-content-center align-items-center">
        <div class="konversi card text-center p-5 col-4 bg-dark text-light shadow-lg">
            <h3>Konversi Nilai</h3>
            <p class="text mb-5">Praktikum 5 & 6 | Function & Git</p>
            <form class="row g-3 d-flex justify-content-center" method="post">
                <div class="col-12">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="col-12">
                    <input type="text" name="nilai" class="form-control" placeholder="Nilai">
                </div>
                <div class="col-12 mt-4">
                    <button type="submit" name="submit" class="btn btn-info fw-bold w-100">Submit</button>
                </div>
            </form>

            <?php
            $nilai;
            $nama;
            $predikat = "Tidak Valid!";

            if (isset($_POST['submit']))
                konversi();

            function konversi()
            {
                $nilai = $_POST['nilai'];
                $nama = $_POST['nama'];

                //Kondisi Pengecekan Untuk Nama Apakah String Atau Bukan
                if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                    echo "<h4 class='mt-5 text-danger'>Nama '$nama' Bukan String! Inputkan String! </h4>";
                    return;
                }

                //Kondisi Pengecekan Untuk Nilai Apakah Number Atau Bukan
                if (!is_numeric($nilai)) {
                    echo "<h4 class='mt-5 text-danger'>Nilai '$nilai' Bukan Angka! Inputkan Angka! </h4>";
                    return;
                }

                if ($nilai >= 81 && $nilai <= 100)
                    $predikat = 'A';
                else if ($nilai >= 71 && $nilai <= 80)
                    $predikat = 'AB';
                else if ($nilai >= 66 && $nilai <= 70)
                    $predikat = 'B';
                else if ($nilai >= 60 && $nilai <= 65)
                    $predikat = 'BC';
                else if ($nilai >= 56 && $nilai <= 59)
                    $predikat = 'C';
                else if ($nilai >= 41 && $nilai <= 55)
                    $predikat = 'D';
                else if ($nilai >= 0 && $nilai <= 40)
                    $predikat = 'E';
                else {
                    echo "<p class='text-danger'>Nilai $nilai di luar Range!</p>";
                    return 0;
                }

                echo "<h4 class='mt-5'>Hi, $nama <br>Nilai $nilai Predikatnya $predikat</h4>";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>