<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stayru.css">
    <link rel="icon" href="favicon_io (2)/favicon.ico">
    <title>PHP CALCULATOR</title>
</head>
<body>

<div class="container">
    <h2>KALKULATOR MENGGUNAKAN PHP</h2>

    <form action="" method="POST">
        <input type="number" name="angka1" autocomplete="off" placeholder="Masukkan angka disini ..." value="<?php if(isset($_POST['angka1'])) echo $_POST['angka1']; ?>">
        <input type="text" name="angka2" autocomplete="off" placeholder="Masukkan angka disini ..." value="<?php if(isset($_POST['angka2'])) echo $_POST['angka2']; ?>">
        <select name="operator" id="opsi">
            <option value="Operator">Operator</option>
            <option value="Tambah">Tambah</option>
            <option value="Kurang">Kurang</option>
            <option value="Kali">Kali</option>
            <option value="Bagi">Bagi</option>
        </select>
        <!-- Gunakan elemen <input> untuk menampilkan hasil -->
        <?php
        // Inisialisasi hasil dengan nilai kosong
        $hasil = '';
        
        // Jika tombol submit ditekan
        if (isset($_POST['submit'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            if (!is_numeric($angka1) || !is_numeric($angka2)) {
                $hasil = "Jangan pake huruf kocak😠😠";
            } elseif ($operator == "Operator") {
                $hasil = "Silahkan pilih dulu operatornya!";
            } else {
                if ($operator == "Tambah") {
                    $hasil = $angka1 + $angka2;
                } elseif ($operator == "Kurang") {
                    $hasil = $angka1 - $angka2;
                } elseif ($operator == "Kali") {
                    $hasil = $angka1 * $angka2;
                } elseif ($operator == "Bagi") {
                    if ($angka2 == 0) {
                        $hasil = "Tidak terdefinisi / ♾️";
                    } else {
                        $hasil = $angka1 / $angka2;
                    }
                } else{
                    $hasil = "Isi dulu formnya!";
                }
            }
        }
        ?>
        <!-- Tampilkan hasil di sini -->
        <button type="submit" name="submit">Operasikan</button>
        <input type="text" name="hasil" readonly placeholder="Hasil akan muncul disini" value="<?php echo $hasil; ?>">
        
    </form>
</div>

</body>
</html>