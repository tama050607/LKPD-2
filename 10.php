<?php

function checkJawaban($nama, ...$arrJawaban) {
    $jawaban = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E']; // jawaban yang benar
    $arrBenar = []; // Array untuk menyimpan hasil penilaian jawaban 

    // Mengecek jawaban yang diberikan dengan jawaban yang benar
    foreach ($jawaban as $key => $value) {
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1; //Jawaban benar
        } else {
            $arrBenar[$key] = 0; //Jawaban salah
        }
    }

    //Menampilkan hasil
    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <br>" . count(array_keys($arrBenar, 1)) . "</br><br>";
    echo "Jumlah Jawaban Salah : <br>" . count(array_keys($arrBenar, 0)) . "</br><br>";
} 
checkJawaban("Ambon", "A", "D", "C", "C", "B", "A", "E", "B", "", "");