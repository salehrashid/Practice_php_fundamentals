<?php
/** tanggal 13 jan 2023 **/
//metode looping atau perulangan ada 4 macam

/** metode for loop.
 * ada 3 kondisi, buat variabel untuk patokan nilai awal,
 **/
echo "<p>for loop</p>";
for ($i = 0; $i <= 10; $i++) {
    echo "<br>$i";
}

echo "<br>";

/** metode while loop **/
$awal = 1;
while ($awal > 50) {
    echo "<br>$awal++";
}

echo "<p>do while loop</p>";
$while = 10;
do {
    echo $while--;
    echo "<br>";
} while ($while > 0);

/** metode foreach **/
$buah = ["pisang", "mangga", "apel"];
foreach ($buah as $buah1) {
    echo $buah1;
    echo "<br>";
}


/** tanggal 19 jan 2023 **/
echo "<br><br>";
/** array multidimensional **/
$buah = ["mentah" => ["pisang", "mangga", "apel"], "",""];
echo $buah["mentah"][1];

//foreach ($buah as $buah1) {
//    echo $buah1;
//    echo "<br>";
//}
