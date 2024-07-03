<!-- simpan.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama_lengkap = $_POST['nama_lengkap'];
$tahun_masuk = $_POST['tahun_masuk'];
$tahun_lulus = $_POST['tahun_lulus'];
$nama_usaha = $_POST['nama_usaha'];
$alamat_usaha = $_POST['alamat_usaha'];
$website = $_POST['website'];
$link_marketplace = $_POST['link_marketplace'];
$no_telepon = $_POST['no_telepon'];
$instagram = $_POST['instagram'];
$tiktok = $_POST['tiktok'];
$facebook = $_POST['facebook'];

$sql = "INSERT INTO alumni (nama_lengkap, tahun_masuk, tahun_lulus, nama_usaha, alamat_usaha, website, link_marketplace, no_telepon, instagram, tiktok, facebook)
VALUES ('$nama_lengkap', '$tahun_masuk', '$tahun_lulus', '$nama_usaha', '$alamat_usaha', '$website', '$link_marketplace', '$no_telepon', '$instagram', '$tiktok', '$facebook')";

if ($conn->query($sql) === TRUE) {
    header("Location: data_alumni.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

session_start();
$_SESSION['input_successful'] = true;
header("Location: data_alumni.php");
exit();

?>