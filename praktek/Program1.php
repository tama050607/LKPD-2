<?php
    $teks = "Selamat ulang tahun yang ke-17!";

    preg_match_all('/[az]/' , $teks, $matches);

    if (count($matches[0]) > 0) {
        //menghilangkan duplikasi simbol
        $uniqueSymbol = ($matches[0]);

        // Menampilkan simbol yang di tentukan
        echo "Karakter yang terdapat pada kalimat : " . implode(',', $uniqueSymbol);
    } else {
        echo "Tidak terdapat simbol pada kalimat.";
}
?>

<!-- buatlah sebuah program yang memiliki function yang bisa menghitung karakter -->