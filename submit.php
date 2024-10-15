<?php
/*************  ✨ Codeium Command ⭐  *************/
// connect to database
$db = new SQLite3('db.db');

// cek jika db tidak ada, maka buat database
if (!$db) {
    echo $db->lastErrorMsg();
} else {
    // cek jika table tidak ada, maka buat table
    $sql = "CREATE TABLE IF NOT EXISTS komentar (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, comment TEXT)";
    $db->exec($sql);
}

// simpan data dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$comment = $_POST['komentar'];
$created_at = date('Y-m-d H:i:s');

// query untuk insert data
$sql = "INSERT INTO komentar (nama, komentar, created_at,jenis_kelamin) VALUES ('$nama', '$comment', '$created_at','$jenis_kelamin')";

// jalankan query
$db->exec($sql);

// tutup koneksi database
$db->close();

// redirect ke index.php
header("Location: index.php");
// /******  6b336f9d-f08f-4210-9aa2-6d015379418e  *******/


?>