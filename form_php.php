<html>
<body>
<h3>form handling dengan method post</h3>
<!-- hasilnya akan tampil di browser -->
<form action="form_php.php" method="post">
    <label for="name"></label>
    <input type="text" id="name" name="name">
    <br>
    <label for="umur"></label>
    <input type="text" id="umur" name="umur">
    <br>
    <button type="submit">Oke</button>
</form>
</body>
</html>

<?php
//mengambil data dengan form handling POST

$nama = $_POST["name "];
$umur = $_POST["umur"];

//tampilkan hasil
echo "nama saya: " . $nama;
echo "umur saya: " . $umur;
?>

<html>
<body>
<h3>form handling dengan method get</h3>
<!-- hasilnya akan tampil di parameter -->
<form action="form_php.php" method="get">
    <label for="name"></label>
    <input type="text" id="name" name="name">
    <br>
    <label for="umur"></label>
    <input type="text" id="umur" name="umur">
    <br>
    <button type="submit">Oke</button>
</form>
</body>
</html>

<?php
//mengambil data dengan form handling GET

$nama = isset($_GET["nama"]);
$umur = isset($_GET["umur"]);

//tampilkan hasil
echo "nama saya: " . $nama;
echo "umur saya: " . $umur;

?>

<html>
<body>
<h3>form handling dengan method request</h3>
<!-- hasilnya akan tampil di browser -->
<form action="form_php.php" method="request">
    <label for="name"></label>
    <input type="text" id="name" name="name">
    <br>
    <label for="umur"></label>
    <input type="text" id="umur" name="umur">
    <br>
    <button type="submit">Oke</button>
</form>
</body>
</html>

<?php
//mengambil data dengan form handling REQUEST

$nama = $_REQUEST["name "];
$umur = $_REQUEST["umur"];

//tampilkan hasil
echo "nama saya: " . $nama;
echo "umur saya: " . $umur;
?>
