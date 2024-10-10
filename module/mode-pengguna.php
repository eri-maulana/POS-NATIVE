<?php

function insert($data)
{
    global $koneksi;

    $nama = strtolower(mysqli_real_escape_string($koneksi, $data['nama']));
    $namaLengkap = mysqli_real_escape_string($koneksi, $data['namalengkap']);
    $katasandi = mysqli_real_escape_string($koneksi, $data['katasandi']);
    $katasandi2 = mysqli_real_escape_string($koneksi, $data['katasandi2']);
    $level = mysqli_real_escape_string($koneksi, $data['level']);
    $alamat = mysqli_real_escape_string($koneksi, $data['alamat']);
    $foto = $_FILES['foto']['nama']; // Escape file name


    if ($katasandi !== $katasandi2) {
        echo 
        '<script>
            alert("konfirmasi kata sandi tidak sesuai, pengguna baru gagal di daftarkan");
        </script>';
        return false;
    }

    $pass = password_hash($katasandi, PASSWORD_DEFAULT);

    $cekNama = mysqli_query($koneksi, "SELECT nama FROM tbl_pengguna WHERE nama='$nama'");
    if (mysqli_num_rows($cekNama) > 0) {
        echo
        '<script>
            alert("nama pengguna sudah terdaftar, silahkan ganti nama yang lain");
        </script>';
        return false;
    }


    // unggah gambar
    if($foto != null){
        $foto = unggahGambar();
    }else {
        $foto = "default.png";
    }

    // gambar tidak sesuai validasi 
    if($foto == ''){
        return false; 
    }

    // memasukan gambar
    $sqlPengguna = "INSERT INTO tbl_pengguna VALUE (null, '$nama', '$namaLengkap', '$pass', '$alamat', '$level', '$foto')";
    mysqli_query($koneksi, $sqlPengguna);

    return mysqli_affected_rows($koneksi);
}
