<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>

    <?php

    echo "<h3>Soal No 1 Greetings</h3>";

    function greetings($name) {
        echo "Halo $name, Selamat Datang di Sanbercode!<br>";
    }

    greetings("Bagas");
    greetings("Wahyu");
    greetings("Nama Peserta");

    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";

    function reverseString($str) {
        $reversed = "";
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $reversed .= $str[$i];
        }
        echo "$str => $reversed <br>";
    }

    reverseString("nama peserta");
    reverseString("Sanbercode");
    reverseString("We Are Sanbers Developers");

    echo "<br>";

    echo "<h3>Soal No 3 Palindrome</h3>";

    function palindrome($word) {
        $reversedWord = "";
        for ($i = strlen($word) - 1; $i >= 0; $i--) {
            $reversedWord .= $word[$i];
        }
        if ($word === $reversedWord) {
            echo "$word => true <br>";
        } else {
            echo "$word => false <br>";
        }
    }

    palindrome("civic");
    palindrome("nababan");
    palindrome("jambaban");
    palindrome("racecar");

    echo "<br>";

    echo "<h3>Soal No 4 Tentukan Nilai</h3>";

    function tentukan_nilai($angka) {
        if ($angka >= 85 && $angka <= 100) {
            return "Sangat Baik<br>";
        } elseif ($angka >= 70 && $angka < 85) {
            return "Baik<br>";
        } elseif ($angka >= 60 && $angka < 70) {
            return "Cukup<br>";
        } else {
            return "Kurang<br>";
        }
    }

    echo tentukan_nilai(98);
    echo tentukan_nilai(76);
    echo tentukan_nilai(67);
    echo tentukan_nilai(43);

    ?>

</body>

</html>
