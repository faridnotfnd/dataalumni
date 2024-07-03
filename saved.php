<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama_lengkap = $conn->real_escape_string($_POST['nama_lengkap']);
$tahun_masuk = $conn->real_escape_string($_POST['tahun_masuk']);
$tahun_lulus = $conn->real_escape_string($_POST['tahun_lulus']);
$nama_usaha = $conn->real_escape_string($_POST['nama_usaha']);
$alamat_usaha = $conn->real_escape_string($_POST['alamat_usaha']);
$website = $conn->real_escape_string($_POST['website']);
$link_marketplace = $conn->real_escape_string($_POST['link_marketplace']);
$no_telepon = $conn->real_escape_string($_POST['no_telepon']);
$instagram = $conn->real_escape_string($_POST['instagram']);
$tiktok = $conn->real_escape_string($_POST['tiktok']);
$facebook = $conn->real_escape_string($_POST['facebook']);

$sql = "INSERT INTO alumni (nama_lengkap, tahun_masuk, tahun_lulus, nama_usaha, alamat_usaha, website, link_marketplace, no_telepon, instagram, tiktok, facebook)
VALUES ('$nama_lengkap', '$tahun_masuk', '$tahun_lulus', '$nama_usaha', '$alamat_usaha', '$website', '$link_marketplace', '$no_telepon', '$instagram', '$tiktok', '$facebook')";

if ($conn->query($sql) === TRUE) {
    session_start();
    $_SESSION['input_successful'] = true;
    header("Location: data_alumni.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
