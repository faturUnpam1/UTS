<?php
// Ambil data dari form
$negara = $_POST['negara'];
    $pertandingan = $_POST['pertandingan'];
    $menang = $_POST['menang'];
    $seri = $_POST['seri'];
    $kalah = $_POST['kalah'];
    $poin = $_POST['poin'];
    $operator = $_POST['operator'];
$nim = $_POST['nim'];

// Hitung poin
$poin = ($menang * 3) + $seri;

// Simpan data ke dalam file
$data = "$negara,$pertandingan,$menang,$seri,$kalah,$poin,$operator,$nim\n";
$file = fopen("data.txt", "a") or die("Tidak bisa membuka file.");
fwrite($file, $data);
fclose($file);

// Baca data dari file
$file_content = file_get_contents("data.txt");
$data_rows = explode("\n", $file_content);

// Tampilkan data "Nama Operator" dan "NIM Mahasiswa" di atas tabel
echo "<h2>Data Group A Piala Asia Qatar U-23</h2>";
echo "<p>Nama Operator: $operator</p>";
echo "<p>NIM Mahasiswa: $nim</p>";

// Tampilkan data pertandingan dalam bentuk tabel
echo "<h2>Data Pertandingan</h2>";
echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Jumlah Pertandingan</th><th>Jumlah Menang</th><th>Jumlah Seri</th><th>Jumlah Kalah</th><th>Poin</th></tr>";
foreach ($data_rows as $row) {
    $fields = explode(",", $row);
    if (count($fields) === 8) {
        echo "<tr>";
        for ($i = 0; $i < 6; $i++) {
            echo "<td>{$fields[$i]}</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";
?>