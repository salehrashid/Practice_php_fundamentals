<?php
/** 20 jan 2023 **/

/** separate (explode) digunakan untuk membuat fitur yaitu (read more) saat dalam paragraf yang panjang **/
/** implode adalah fitur yang berkebalikan dari explode, yaitu untuk menggabungkan kalimat **/
/** jadi gampangnya gini jika explode adalah pemecah string, maka implode adalah penggabung kembali string yang telah di pecahkan oleh explode **/

//type data string
$kalimat = "islamic development network";

//tipe data integer
$angka = "2023";

//ketika di explode maupun impolde otomatis datanya akan berubah menjadi array
$explode = explode(" ", $kalimat);

//exekusi array menggunakan print_r() bukan echo
print_r($explode);

echo "<br><br>";

echo $explode[0]."<br>";
echo $explode[1]."<br>";
echo $explode[2]."<br>";

//implode adalah penggabungan kalimat yang diatas

$implode = implode(" ", $explode);

echo "<br><br>";

print_r($implode);

echo "<br><br>";

//array merge untuk menggabungkan 2 nilai variabel array
$array0 = ['dodge', "shelby GT", "viper"];
$array1 = ["wrx sti", "supra", "r34"];
$result = array_merge($array0, $array1);

/** selain memakai print_r, ada juga fungsi yang sama yaitu memakai var_dump **/
var_dump($result);

echo "<br><br>";

$merge = implode(" ! ", $result);
print_r($merge);