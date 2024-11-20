<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="validasi5.css">
    <title>Stroke Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; 
            color: #333; 
        }

        table {
            width: 80%; 
            margin: 20px auto; 
            border-collapse: collapse; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            border-radius: 10px; 
        }

        th, td {
            padding: 15px; 
            text-align: left; 
            border: 1px solid #007BFF; 
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #e7f3ff;
        }

        tr:hover {
            background-color: #d1e7fd;
        }

        h3, h1 {
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #007BFF;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php

if (isset($_POST["proses"])) {
$no = $_POST["no"];
$nama = $_POST["nama"];
$unit = $_POST["unit"];
$tanggal = $_POST["tanggal"];
$jabatan = $_POST["jabatan"];
$lama = $_POST["lama"];
$status = $_POST["status"];
$bpjs = $_POST["bpjs"];
$pinjaman = $_POST["pinjaman"];
$cicilan = $_POST["cicilan"];
$infaq = $_POST["infaq"];


class data {

    public $gaji;
    public $bonus;
    public $gaji_bersih;

    public function data_karyawan ($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k){

        switch ($e) {
            case 'Kepala Sekolah':
                $gaji = 10000000;
                break;
            case 'Wakasek':
                $gaji = 700000;
                break;
            case 'Guru':
                $gaji = 5000000;
                break;
            case 'OB':
                $gaji = 2500000;
                break;
            default:
                $gaji = 0;
                break;
        }

        if ($g == "Tetap") {
            $bonus = 1000000;
        } else{
            $bonus = 0;
        }

        $gaji_bersih = $gaji + $bonus - $h - $i - $j - $k ;

        echo "<table align='center' style='color:blue;'>
        <tr>
            <td colspan='2' align='center'><h3>Data Penggajihan</h3></td>
        </tr>
        <tr>
            <td>No</td>
            <td>:$a</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:$b</td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>:$c</td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>:$d</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h1><i>Gaji</i></h1></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:$e</td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:$gaji</td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>:$f</td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>:$g</td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>:$bonus</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h1>Potongan</h1></td>
        </tr>
        <tr>
            <td>BPJS</td>
            <td>:$h</td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>:$i</td>
        </tr>
        <tr>
            <td>Cicilan</td>
            <td>:$j</td>
        </tr>
        <tr>
            <td>Infaq</td>
            <td>:$k</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h1>Total</h1></td>
        </tr>
        <tr>
            <td><b>Gaji Bersih</b></td>
            <td> <b>:$gaji_bersih</b></h1></td>
        </tr>
    </table>";
    }
}
$cetak = new data();
echo $cetak->data_karyawan($no,$nama,$unit,$tanggal,$jabatan,$lama,$status,$bpjs,$pinjaman,$cicilan,$infaq);
}


?>