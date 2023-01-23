<?php
/** tanggal 19 jan 2023 **/

echo "<h1 style='text-align: center'>if else statement & operators</h1>";

echo "<h3>Logic operator</h3>";

//operator logika
$laki = "laki";
$cewe = "cewe";
$perempuan = "fulanah";

/** operator && dua statement harus benar **/
echo "<p style='font-weight:bold'>operator &&</p>";
if ($laki == "cowo" && $cewe == "cewe"){
    echo "benar";
} else {
    echo "tidak benar";
}

echo "<br><br>";

/** operator || salah satu statement harus benar **/
echo "<p style='font-weight:bold'>operator ||</p>";
if ($laki == "laki" || $cewe == "perempuan"){
    echo "benar";
} else {
    echo "tidak benar";
}

echo "<br><br>";

/** operator != salah satu fungsi logika, ketika ingin memastikan satu nilai tidak sama dengan yang lain **/
echo "<p style='font-weight:bold'>operator !=</p>";
if ($laki != "fulan"){
    echo "benar";
} else {
    echo "tidak benar";
}

echo "<br><br>";

/** Operator xor hanya akan menghasilkan nilai true jika salah satu operand-nya bernilai true **/
echo "<p style='font-weight:bold'>operator xor</p>";
if ($laki == "laki" xor $cewe == "cewe"){
    echo "benar";
} else {
    echo "tidak benar";
}

echo "<br><br>";
echo "<h3>Aritmatika operator</h3>";

/** operator aritmatika **/
$a = 10;
$b = 1;

//subtraction
echo $a - $b. "<br>";

//add
echo $a + $b. "<br>";

//multiply
echo $a * $b. "<br>";

//divide
echo $a / $b. "<br>";

//modulus
echo $a % $b. "<br>";

?>