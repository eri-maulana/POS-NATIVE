<?php

// koneksi ke database
require "../config/config.php";

$judul = "Tambah User - POS NATIVE";

require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";
?>

<!-- Konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-xl">Pengguna </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= $url_utama ?>tambah-pengguna.php" class="text-dark">Pengguna</a></li>
              <li class="breadcrumb-item active">Tambah Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-lg mt-1"><i class="fas fa-user-plus fa-sm"></i> Tambah Pengguna </h3>
            <button type="submit" name="simpan" class="btn btn-primary btn-sm float-right">Simpan</button>
            <button type="reset" name="reset" class="btn btn-secondary btn-sm float-right mr-2">Atur Ulang</button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8 mb-3">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" autofocus autocomplete="off" require>
                </div>
                <div class="form-group">
                  <label for="namalengkap">Nama Lengkap</label>
                  <input type="text" name="namalengkap" class="form-control" id="namalengkap" require>
                </div>
                <div class="form-group">
                  <label for="katasandi">Kata Sandi</label>
                  <input type="password" name="katasandi" class="form-control" id="katasandi" require>
                </div>
                <div class="form-group">
                  <label for="konfirmasikatasandi">Konfirmasi Kata Sandi</label>
                  <input type="password" name="konfirmasikatasandi" class="form-control" id="konfirmasikatasandi" require>
                </div>
                <div class="form-group">
                  <label for="level">Level</label>
                  <select name="level" id="level" class="form-control" require>
                    <option value="">-- Level Pengguna --</option>
                    <option value="1">Administrator </option>
                    <option value="2">Supervisor</option>
                    <option value="3">Operator</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" id="alamat" class="form-control" require></textarea>
                </div>
              </div>
              <div class="col-lg-4 mb-3 text-center">
                <img src="<?= $url_utama ?>asset/image/user.png" alt="Profil Bawaan" class="profile-user-img img-circle my-3">
                <input type="file" name="profil" id="profil" class="form-control">
                <span class="text-sm">tipe file gambar (jpg-png-gif)</span> <br>
                <span class="text-sm">lebar = tinggi</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
require "../template/footer.php";
?>