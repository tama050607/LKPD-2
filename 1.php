<?php
    //Buatlah pengkondisian yang akan mengecek jumlah karakter spesial (simbol) pada sebuah kalimat.
    //Jika kalimat tersebut memiliki simbol didalamnya maka akan menampilkan "Karakter yang terdapar pada kalimat :!,*,$".
    //Jika tidak, maka menampilkan "Tidak terdapat simbol pada kalimat."
    $teks = "Selamat ulang tahun yang ke-17!"; 
    //variabel $teks 

    //mencari semua simbol (karakter yang bukan huruf atau angka)
    preg_match_all('/[^a-zA-Z\s]/' , $teks, $matches);
    //preg match all untuk mencari huruf/simbol
    
    //Memeriksa apakah ada simbol yang ditemukan
    if (count($matches[0]) > 0) {
        //menghapus elemen duplikat dari sebuah array
        $uniqueSymbol = array_unique($matches[0]);

        // Menampilkan simbol yang ditemukan   //menggabungkan dua aray
        echo "Karakter yang terdapat pada kalimat : " . implode(',', $uniqueSymbol);
    } else {
        echo "Tidak terdapat simbol pada kalimat.";
}
?>