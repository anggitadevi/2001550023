<?php
header("Content-Type: application/xml; charset=UTF-8");
include 'koneksi.php';

$jenis_kelamin = isset($_GET['jenis_kelamin']) ? $_GET['jenis_kelamin'] : '';
$agama = isset($_GET['agama']) ? $_GET['agama'] : '';

$query = "SELECT * FROM warga WHERE 1";

if($jenis_kelamin) {
    $query .= " AND jenis_kelamin='$jenis_kelamin'";
}

if($agama) {
    $query .= " AND agama='$agama'";
}

$result = mysqli_query($koneksi, $query);
if (!$result) {
    die('Query error: ' . mysqli_error($koneksi));
}

$xml = new SimpleXMLElement('<data_warga/>');

while ($row = mysqli_fetch_assoc($result)) {
    $warga = $xml->addChild('warga');
    $warga->addChild('id', $row['id']);
    $warga->addChild('nama', $row['nama']);
    $warga->addChild('alamat', $row['alamat']);
    $warga->addChild('jenis_kelamin', $row['jenis_kelamin']);
    $warga->addChild('agama', $row['agama']);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'tambah') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $query = "INSERT INTO warga (nama, alamat, jenis_kelamin, agama) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama')";
    if (mysqli_query($koneksi, $query)) {
        echo "<response> Data berhasil ditambahkan! </response>";
    } else {
        echo "<error> Error: " . mysqli_error($koneksi) . " </error>";
    }
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    $query = "UPDATE warga SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama' WHERE id=$id";
    if (mysqli_query($koneksi, $query)) {
        echo "<response> Data berhasil diupdate! </response>";
    } else {
        echo "<error> Error: " . mysqli_error($koneksi) . " </error>";
    }
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'hapus') {
    $id = $_POST['id'];

    $query = "DELETE FROM warga WHERE id=$id";
    if (mysqli_query($koneksi, $query)) {
        echo "<response> Data berhasil dihapus! </response>";
    } else {
        echo "<error> Error: " . mysqli_error($koneksi) . " </error>";
    }
    exit;
}
echo $xml->asXML();
?>