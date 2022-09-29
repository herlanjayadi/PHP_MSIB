<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas3_PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Data Nilai Mahasiswa</h1>
    <div class="container">
        <?php 
        $mhs1 = ["nim" => "001", "nama" => "udin", "nilai" => 75];
        $mhs2 = ["nim" => "002", "nama" => "hera", "nilai" => 60];
        $mhs3= ["nim" => "003", "nama" => "nurul", "nilai" => 55];
        $mhs4 = ["nim" => "004", "nama" => "jamet", "nilai" => 80];
        $mhs5 = ["nim" => "005", "nama" => "cika", "nilai" => 95];
        $mhs6 = ["nim" => "006", "nama" => "bahar", "nilai" => 65];
        $mhs7 = ["nim" => "007", "nama" => "dani", "nilai" => 85];
        $mhs8 = ["nim" => "008", "nama" => "yuda", "nilai" => 40];
        $mhs9 = ["nim" => "009", "nama" => "yuda", "nilai" => 85];
        $mhs10 = ["nim" => "010", "nama" => "via", "nilai" => 70];
        $mahasiswa = [$mhs1,$mhs2,$mhs3,$mhs4,$mhs5,$mhs6,$mhs7,$mhs8,$mhs9,$mhs10,];
        $judul = ["No", "NIM", "Nama", "Nilai", "Keterangan", "Grade", "Predikat"];
        ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <?php 
                    foreach ($judul as $title) { ?>
                        <th><?= $title ?></th>
                        <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($mahasiswa as $mhs) {
                    $nim = $mhs['nim'];
                    $nama = $mhs['nama'];
                    $nilai = $mhs['nilai'];
                    $keterangan = ($nilai >= 60) ? "LULUS" : "Gagal";
                    if ($nilai >= 90 && $nilai <= 100) {
                        $grade = "A";
                    } elseif ($nilai >= 80 && $nilai <=90) {
                        $grade = "B";
                    } elseif ($nilai >= 70 && $nilai <=80) {
                        $grade = "C";
                    }elseif ($nilai >= 60 && $nilai <=70) {
                        $grade = "D";
                    }else {
                        $grade = "E";
                    }
                    switch ($grade) {
                        case 'A':
                            $predikat = "Memuaskan";
                            break;
                            case 'B':
                             $predikat = "Baik";
                            break;
                            case 'C':
                            $predikat = "Kurang";
                            break;
                            case 'D':
                            $predikat = "Buruk";
                            break;
                            default:
                            $predikat = "Buruk";
                            break;
                    }?>
                    <tr>
                    <td><?= $no++ ?></td>
                        <td><?= $nim ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $nilai ?></td>
                        <td><?= $keterangan ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                    </tr>
               <?php } ?>
            </tbody>
            <tfoot>
                <?php 
                $jumlahMhs = count($mahasiswa);
                $kumpulanNilai = array_column($mahasiswa, "nilai");
                $totalNilai = array_sum($kumpulanNilai);
                $nilaiTerbesar = max($kumpulanNilai);
                $nilaiTerkecil = min($kumpulanNilai);
                $rata2 = $totalNilai / $jumlahMhs;

                $tfoot = [
                    "Jumlah Mahasiswa" => $jumlahMhs,
                    "Nilai Terbesar" => $nilaiTerbesar,
                    "Nilai Terkecil" => $nilaiTerkecil,
                    "Rata-rata" => $rata2,
                ];
                 foreach ($tfoot as $key => $value) { ?>
                    <tr>
                        <th><?= $key ?></th>
                        <th><?= $value ?></th>
                    </tr>
                 
                <?php } ?>
            </tfoot>
        </table>
    </div>
</body>
</html>