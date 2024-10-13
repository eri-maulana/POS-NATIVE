<?php

require "../config/config.php";
require "../config/functions.php";
require "../module/mode-pengguna.php";

$id = $_GET['id'];
$foto = $_GET['foto'];

if (hapusPengguna($id, $foto)){
    echo "
        <script>
            alert('Pengguna berhasil dihapus');
            document.location.href = 'data-pengguna.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Pengguna gagal dihapus');
            document.location.href = 'data-pengguna.php';
        </script>
    ";
}