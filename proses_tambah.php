<?php
include 'config/db.php';
$foto = $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $foto);
mysqli_query($conn, "INSERT INTO barang (kode,nama_barang,deskripsi,harga_satuan,jumlah,foto)
VALUES ('$_POST[kode]','$_POST[nama_barang]','$_POST[deskripsi]','$_POST[harga_satuan]','$_POST[jumlah]','$foto')");
header("Location: index.php");
