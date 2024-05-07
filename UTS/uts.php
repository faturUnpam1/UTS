<!DOCTYPE html>
<html>
<head>
    <title>Input Klasemen Piala Asia U-23 Qatar Group A</title>
</head>
<body>
    <h2>Input Klasemen Piala Asia U-23 Qatar Group A</h2>
    <form action="submit.php" method="post">
        <label for="negara">Nama Negara:</label>
        <select name="negara" id="negara">
            <option value="Qatar U-23">Qatar U-23</option>
            <option value="Indonesia U-23">Indonesia U-23</option>
            <option value="Australia U-23">Australia U-23</option>
            <option value="Yordania U-23">Yordania U-23</option>
        </select><br><br>
        <label for="pertandingan">Jumlah Pertandingan (P):</label>
        <input type="number" name="pertandingan" id="pertandingan" required><br><br>
        <label for="menang">Jumlah Menang (M):</label>
        <input type="number" name="menang" id="menang" required><br><br>
        <label for="seri">Jumlah Seri (S):</label>
        <input type="number" name="seri" id="seri" required><br><br>
        <label for="kalah">Jumlah Kalah (K):</label>
        <input type="number" name="kalah" id="kalah" required><br><br>
        <label for="poin">Jumlah Poin:</label>
        <input type="number" name="poin" id="poin" required><br><br>
        <label for="operator">Nama Operator:</label>
        <input type="text" name="operator" id="operator" required><br><br>
        <label for="nim">NIM Mahasiswa:</label>
        <input type="text" name="nim" id="nim" required><br><br>
        <input type="submit" value="Submit">
        <form action="submit.php" method="post">
       

</body>
</html>
