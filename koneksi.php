<?php

include "koneksi.php";

// Menentukan metode request
$method = $_SERVER['REQUEST_METHOD'];

header('Content-Type: application/json');

switch($method) {
    case 'GET':
        $sql = "SELECT * FROM kota atlas";
        $stmt = $pdo->query($sql);
        $kota atlas  = $stmt->fetchAll();
        echo json_encode($kota atlas);
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"));
        if(isset($data->nama) && isset($data->alamat) && isset($data->jenis_kelamin)) {
            $sql = "INSERT INTO kota atlas (Nama, Alamat, Deskripsi) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$data->Nama, $data->Alamat, $data->Deskripsi]);
            echo json_encode(['message' => 'Kota Atlas berhasil ditambahkan']);
        } else {
            echo json_encode(['message' => 'Data tidak lengkap']);
        }
        break;

    case 'PUT':
        $data = json_decode(file_get_contents("php://input"));
        if(isset($data->id) && isset($data->nama) && isset($data->alamat) && isset($data->jenis_kelamin)) {
            $sql = "UPDATE karyawan SET Nama_Wisata=?, Alamat_Wisata=?, Deskripsi_Wisata=? WHERE Id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$data->Nama_Wisata, $data->Alamat_Wisata, $data->Deskripsi_Wisata, $data->Id]);
            echo json_encode(['message' => 'Kota Atlas berhasil diperbarui']);
        } else {
            echo json_encode(['message' => 'Data tidak lengkap']);
        }
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents("php://input"));
        if(isset($data->id)) {
            $sql = "DELETE FROM Kota Atlas WHERE Id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$data->Id]);
            echo json_encode(['message' => 'Kota Atlas berhasil dihapus']);
        } else {
            echo json_encode(['message' => 'Id tidak ditemukan']);
        }
        break;

    default:
        echo json_encode(['message' => 'Metode tidak dikenali']);
        break;
}

?>