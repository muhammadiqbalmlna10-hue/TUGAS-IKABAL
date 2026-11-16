<?php

//siapkan variabel awal //
$angka1 = "";
$angka2 = "";
$operasi = "+";
$hasil ="";


  //jalankan hanya kalau tombol "hitung" ditekan
  if(isset($_POST['hitung'])){
      $angka1 = $_POST['angka1'];
      $angka2 = $_POST['angka2'];
      $operasi = $_POST['operasi'];

      //Hitung sesuai jumlah operasi yang dipilih //
      switch ($operasi) {
        case "+";
            $hasil = $angka1 + $angka2;
            break;
        
         case "-";
            $hasil = $angka1 - $angka2;
            break;
             case "*";
            $hasil = $angka1 * $angka2;
            break;
            case "/";
            if ($angka2 == 0){
             $hasil =("tidak bisa di bagi 0");
            } else {
            $hasil = $angka1 / $angka2;
            }
            break;
      }
  }
?>
<div class="Kotak">
    <h1>Kalkulator Sederhana</h1>
    <link rel="stylesheet" href="style.css">
    <form method="post">
        <input type="number" step="any" name="angka1" placeholder="Angka pertama" 
        value="<?= htmlspecialchars($angka1) ?>" required>
        <select name="operasi">
            <option value="+" <?= $operasi == "+" ? "selected" : "" ?>> Tambah</option>
            <option value="-" <?= $operasi == "-" ? "selected" : "" ?>> Kurang</option>
            <option value="*" <?= $operasi == "*" ? "selected" : "" ?>> Kali</option>
            <option value="/" <?= $operasi == "/" ? "selected" : "" ?>> Bagi</option>
        </select>

        <input type="number" step="any" name="angka2" placeholder="Angka kedua" 
        value="<?= htmlspecialchars($angka2) ?>" required>
        <button type="submit" name="hitung">Hitung</button>

    </form>
    <?php if ($hasil != ""): ?>
    <div class="hasil">
        Hasil: <strong><?= $hasil ?></strong>
    </div>
    <?php endif; ?>


    