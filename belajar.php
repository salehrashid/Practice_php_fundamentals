<!--tag format php-->

<!--tanggal 11 jan 2023-->
<?php
echo "<title>belajar</title>";

//membuat sebuah class
class Sekolah
{
    //property
    var $kelas;
    var $office;
    var $uks;

    //method/fungsi
    function func_1()
    {
        return "this is function 1";
    }

    function func_2()
    {
        return "this is function 2";
    }


}

//object
$idnschool = new Sekolah();

//set property dari object
$idnschool->kelas = "11 RPL B";
$idnschool->office = "SMK office";
$idnschool->uks = "uks SMK";

//menampilkan hasil dari isi variabel
echo $idnschool->kelas;
echo "<br>";
echo $idnschool->office;
echo "<br>";
echo $idnschool->uks;
echo "<br>";
//memanggil hasil isi method
echo $idnschool->func_1();
echo "<br>";
echo $idnschool->func_2();

class Mobil
{
    var $warna;
}

$warnaIjo = new Mobil();
$warnaSilver = new Mobil();
$warnaHitam = new Mobil();

$warnaHitam->warna = "Hitam";
$warnaSilver->warna = "Silver";
$warnaIjo->warna = "Ijo";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo $warnaHitam->warna;
echo "<br>";
echo $warnaSilver->warna;
echo "<br>";
echo $warnaIjo->warna;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

class Baru
{
    //method public bisa di akses di luar class maupun class keturunanya
    public function detail()
    {
        return "lu nanya??";
    }
}

$newObject = new Baru();
echo $newObject->detail();
echo "<br>";
echo $turunan = $newObject->detail();

class Kedua
{
//    protected $nama = "saleh rashid";

    protected function umurLu()
    {
        return "19 th";
    }

    public function umurlu2()
    {
        return $this->umurLu();
    }
}

echo "<br>";
$secondObject = new Kedua();
echo $secondObject->umurlu2();

//tanggal 12 jan 2023

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//contoh pembuatan variabel $this
class TryThis
{
    //membuat sebuah variabel yang akan di akses ke dalam function
    public $nama = "saleh";

    //membuat sebuah function
    public function test()
    {
        return "nama saya $this->nama";
    }
}

//membuat sebuah object untuk menampilkan hasil
$nama_saya = new TryThis();
$nama_saya->nama = "rashid";
echo $nama_saya->test();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//variabel scope adalah yang di jalankan berdasarkan penempatan posisinya
$a = 10;
function varScope()
{
    $a = 19;
    $b = 2;
}

echo "<p>variabel scope</p>";

varScope();
echo $a;
echo $b; //akan terjadi error karena di line 132 di bawah nya tidak ada var b, tapi kalo line 140 dan 141 di taro dalam fun tester maka aka jalan seperti biasa nya

echo "<br>";

echo "<p>variabel global</p>";

//variabel global
$c = 2;
function varGlobal()
{
    global $c;
    global $d;

    $d = 3;
    echo $c;
    echo $d;
}

varGlobal();

echo "<br>";

//variabel static adalah variabel yang mempertahankan nilai nya di setiap pemanggilan function
function varStatic()
{
    static $a = 0;
    $a = $a + 1;
    return "nomor $a";
}

echo varStatic();
echo "<br>";
echo varStatic();
echo "<br>";
echo varStatic();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//membuat method atau function dengan parameter
//membuat class
class Pesawat
{
    //membuat function atau method
    public function hidupkanPesawat($namaPesawat, $pemilik)
    {
        return "hidupin pesawat $namaPesawat punya $pemilik";
    }
}

$pesawatGua = new Pesawat();
echo $pesawatGua->hidupkanPesawat("F-14 Tomcat", "saleh")
?>