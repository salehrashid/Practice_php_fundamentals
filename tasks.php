<?php
echo "<title>tasks</title>";
echo "<h1 style='text-align: center'>My Devices</h1>";
echo "<style>
table, th, td {
  border:1px solid black;
}
</style>";

class MyDevice
{
    var $brand;
    var $ram;
    var $storge;
    var $proccesor;
    var $warna;

    var $handphones;
}

$laptopbaru = new MyDevice();

//My Laptop
echo "<img src='https://lh3.googleusercontent.com/-Gwy02J1uiVk/YTHLXwZHhPI/AAAAAAAAY3Y/WlDcAOlgT6AaAn65Y6ZhDghdVY74qr2DgCLcBGAsYHQ/s16000/Harga%2Bdan%2BSpesifikasi%2BLenovo%2BThinkBook%2B14%2BG2%2BITL%2B%2BLaptophia.jpg' width='300px'>";
echo "<br>";
$laptopbaru->brand = "Lenovo ThinkBook";
$laptopbaru->ram = "16GB";
$laptopbaru->storge = "SSD 512GB";
$laptopbaru->proccesor = "AMD Ryzen 4000 series";
$laptopbaru->warna = "Silver";

echo $laptopbaru->brand;
echo "<br>";
echo $laptopbaru->ram;
echo "<br>";
echo $laptopbaru->storge;
echo "<br>";
echo $laptopbaru->proccesor;
echo "<br>";
echo $laptopbaru->warna;

echo "<br>";
echo "<hr>";

//My Handphone
$brand = new MyDevice();
$proccessor = new MyDevice();
$warna = new MyDevice();
$ram = new MyDevice();
$storage = new MyDevice();

echo "<img src='https://gizmologi.id/wp-content/uploads/2019/05/Realme-C2-specs01.jpg' width='300px'>";
echo "<br>";
$brand->handphones = "Realme C2";
$proccessor->handphones = "MediaTek P22";
$ram->handphones = "2GB";
$storage->handphones = "32GB";
$warna->handphones = "Diamond Black";

echo $brand->handphones;
echo "<br>";
echo $proccessor->handphones;
echo "<br>";
echo $ram->handphones;
echo "<br>";
echo $storage->handphones;
echo "<br>";
echo $warna->handphones;

echo "<br>";
echo "<hr>";

//My New Handphone
$brand = new MyDevice();
$proccessor = new MyDevice();
$warna = new MyDevice();
$ram = new MyDevice();
$storage = new MyDevice();

echo "<img src='http://p-id.ipricegroup.com/uploaded_b11455d81776201452658045b67e4215.jpg'>";
echo "<br>";
$brand->handphones = "Redmi Note 11";
$proccessor->handphones = "Snapdragon 680";
$ram->handphones = "8GB";
$storage->handphones = "128GB";
$warna->handphones = "Graphite Gray";

echo $brand->handphones;
echo "<br>";
echo $proccessor->handphones;
echo "<br>";
echo $ram->handphones;
echo "<br>";
echo $storage->handphones;
echo "<br>";
echo $warna->handphones;

echo "<hr>";

echo "<h1 style='text-align: center'>Table</h1>";

echo "<table>
  <tr>
    <th>$brand->handphones</th>
    <th>Alamat</th>
    <th>Asal</th>
  </tr>
  <tr>
    <td>MT's Hasyim Asy'ari</td>
    <td>Petunjungan</td>
    <td>Indonesia</td>
  </tr>
  <tr>
    <td>SMK IDN Boarding School</td>
    <td>Bogor</td>
    <td>Indonesia</td>
  </tr>
</table>";

//tanggal 12 jan 2023
echo "<hr>";

echo "<h1 style='text-align: center'>Variabel</h1>";

$mobil1 = "dodge";
$mobil2 = "mustang";
$mobil7 = "ford";
$mobil4 = "mcLaren";
$mobil5 = "lamborgini";
function scopeVar()
{
    $mobil1 = "viper";
    $mobil2 = "shelby GT 500";
}

echo "<p>variabel scope</p>";

scopeVar();
echo $mobil1;
echo "<br>";
echo $mobil2;

echo "<br>";
echo "<br>";

echo "<p>variabel global</p>";

$mobil6 = "polestar";
function globalVar()
{
    global $mobil6;
    global $mobil7;

    $mobil7 = "porsche";
    echo $mobil6;
    echo "<br>";
    echo $mobil7;
}

globalVar();

echo "<br>";
echo "<br>";

echo "<p>pengurangan</p>";

function loopStaticVar()
{
    for ($i = 100; $i >= 0; $i -= 10) {
        echo "The number is: $i <br>";
    }
}

loopStaticVar();

echo "<hr>";
echo "<h1 style='text-align: center'>looping</h1>";
/** tanggal 13 jan 2023 **/

for ($i = 0; $i <= 10; $i += 2) {
    echo "<br>$i";
}

echo "<br>";
echo "<br>";

for ($i = 10; $i >= 0; $i--) {
    echo "The number is: $i <br>";
}

echo "<br>";
echo "<br>";

?>
    <html>
    <table>
        <tr>
            <th>Buah buahan</th>
        </tr>
        <?php
        $buah = ["pisang", "mangga", "apel", "manggis", "nanas", "sawo"];
        foreach ($buah as $buah1) {
            echo "<tr>
                <td>$buah1</td>
              
              </tr>";
        }
        ?>
    </table>
    </html>

<?php

echo "<hr>";
echo "<h1 style='text-align: center'>kalkulator</h1>";

$birthDate = "7/14/2004";
$birthDate = explode("/", $birthDate);
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
echo "your age is:" . $age;

echo "<br>";
echo "<br>";
?>

<?php
/** tanggal 19 jan 2023 **/

echo "<hr>";
echo "<h1 style='text-align: center'>if else statement</h1>";

for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "$i genap <br>";
    } else {
        echo "$i ganjil <br>";
    }
}

echo "<br>";
echo "<br>";

$handphones = [
    "apple" => [
        "12" => ["pro max", "pro"]
    ],
    "samsung" => [
        "note",
        "galaxy" => ["s16", "s17", "s18"],
        "tablet"
    ],
    "xiaomi" => [
        "redmi note 10 pro", "redmi note 11 pro", "redmi note 12 pro",
    ]
];

echo $handphones["apple"]["12"][0];
echo "<br>";
echo $handphones["samsung"]["galaxy"][1];
echo "<br>";
echo $handphones["xiaomi"][0];

echo "<hr>";
echo "<h1 style='text-align: center'>separate</h1>";
/** 20 jan 2023 **/

$array0 = ['dodge', "shelby GT", "viper"];
$array1 = ["wrx sti", "supra", "r34"];
$result = array_merge($array0, $array1);
//var_dump($result);

echo "<br><br>";

$merge = implode(" ! ", $result);
print_r($merge);

echo "<br><br>";

$handphone = ["redmi", "asus", "LG", "samsung"];
$hasil = array_merge($handphone);
var_dump($hasil);
echo "<br>";

$misah = array_slice($handphone, 2);
var_dump($misah);

echo "<br><br>";

$cars = ["dodge", "mcLaren", "lambo", "bugatti"];
$price = ["27jt", "44jt", "43jt", "80jt"];
$carsPrice = array_combine($cars, $price);
var_dump($carsPrice);