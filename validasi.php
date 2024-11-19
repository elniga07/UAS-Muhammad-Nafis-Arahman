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

switch ($jabatan) {
    case 'Kepala Sekolah':
        $gaji = 10000000;
        break;
    case 'Wakasek':
        $gaji = 7500000;
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

if ($status == "Tetap") {
    $bonus = 1000000;
} else{
    $bonus = 0;
}

$gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $cicilan - $infaq ;

echo"<table align='center'>
        <tr align='center'>
            <td colspan='2' bgcolor='grey' style='color:black;'><h3>$nama</h3></td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h3>Primary card title</h3></td>
        </tr>
        <tr>
            <td>No</td>
            <td>:$no</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:$nama</td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>:$unit</td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>:$tanggal</td>
        </tr>
        <tr>
            <td colspan='2' align='center'><h1><i>Gaji</i></h1></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:$jabatan</td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:$gaji</td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>:$lama</td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>:$status</td>
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
            <td>:$bpjs</td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>:$pinjaman</td>
        </tr>
        <tr>
            <td>Cicilan</td>
            <td>:$cicilan</td>
        </tr>
        <tr>
            <td>Infaq</td>
            <td>:$infaq</td>
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


?>