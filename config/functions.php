<?php

// fungsi unggah gambar
function unggahGambar(){
    $namaFile   = $_FILES['foto']['nama'];
    $ukuran     = $_FILES['foto']['ukuran'];
    $tmp        = $_FILES['foto']['tmp_nama'];

    // validasi dokumen gambar yang boleh di unggah 
    $ekstensiGambarValid    = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar         = explode('.', $namaFile);
    $ekstensiGambar         = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo '<script>
            alert("file yang anda unggah bukan gambar, data gagal ditambahkan");
        </script>';
        return false;
    }

    // validasi ukuran gambar yang boleh di unggah
    $ukuranGambarMax    = 2097152; // 2MB
    if($ukuran > $ukuranGambarMax){
        echo '<script>
            alert("ukuran gambar terlalu besar, data ukuran gambar tidak boleh lebih dari 2MB");
        </script>';
        return false;
    }

    $namaFileBaru = rand(10,1000) . '-' . $namaFile;
    move_uploaded_file($tmp, '../asset/image/'. $namaFileBaru);
    return $namaFileBaru;
}



?>