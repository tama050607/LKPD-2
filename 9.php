<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rupiah to Coin Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Rupiah to Coin Converter</h2>
    <!-- Form untuk memasukkan jumlah rupiah -->
    <form method="post">
        <label for="rupiah">Masukkan Jumlah Rupiah:</label>
        <input type="number" name="rupiah" id="rupiah" required>
        <br><br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    // Memeriksa apakah formulir telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai jumlah rupiah dari formulir
        $rupiah = $_POST['rupiah'];

        // Memeriksa apakah input adalah angka yang valid
        if (!is_numeric($rupiah)) {
            echo "<p>Invalid input. Please enter a valid number.</p>";
            return; // Menghentikan eksekusi lebih lanjut jika input tidak valid
        }

        // Jenis koin yang tersedia
        $coins = [1000, 500, 200, 100];
        // Array untuk menyimpan hasil konversi
        $result = [];

        // Menghitung jumlah koin untuk setiap jenis koin yang tersedia
        foreach ($coins as $coin) {
            // Menghitung jumlah koin yang bisa digunakan
            $result[$coin] = intdiv($rupiah, $coin);
            // Menghitung sisa rupiah setelah diambil koin
            $rupiah = $rupiah % $coin;
        }

        // Menampilkan hasil konversi
        ?>
        <h3>Hasil Konversi:</h3>
        <ul>
            <?php
            // Menampilkan jumlah setiap jenis koin
            foreach ($result as $coin => $count) {
                echo "<li>Koin Rp$coin: $count</li>";
            }
            ?>
        </ul>
        <?php
        // Menampilkan sisa rupiah jika ada
        if ($rupiah > 0) {
            echo "<p>Sisa Rupiah: Rp$rupiah (Tidak dapat dikonversi ke koin)</p>";
        }
    }
    ?>
</body>
</html>
