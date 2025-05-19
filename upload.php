<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $foto = basename($_FILES["foto"]["name"]);
    $target_file = $target_dir . $foto;
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    echo "Upload berhasil.";
}
