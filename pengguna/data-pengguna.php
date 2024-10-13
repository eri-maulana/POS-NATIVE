<?php

require "../config/config.php";
require "../config/functions.php";
require "../module/mode-pengguna.php";

$judul = "Pengguna - POS Native";
require "../template/header.php";
require "../template/navbar.php";
require "../template/sidebar.php";

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengguna </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= $url_utama ?>pengguna.php">Beranda</a></li>
                        <li class="breadcrumb-item active">Pengguna</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-flui">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-lg mt-1"><i class="fas fa-list fa-sm"></i> Data Pengguna</h3>
                    <div class="card-tools">
                        <a href="<?= $url_utama ?>pengguna/tambah-pengguna.php" type="submit" name="simpan" class="btn btn-primary btn-sm float-right"><i class="fas fa-plus fa-sm"></i> Tambah Pengguna</a>
                    </div>
                </div>
                <div class="card-body table-responsive p-3">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Level</th>
                                <th style="width: 10%;">Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $pengguna = ambilData("SELECT * FROM tbl_pengguna");
                                foreach ($pengguna as $data): ?>

                                <tr>
                                    <td>
                                        <?=$no++?>
                                    </td>
                                    <td>
                                        <img src="../asset/image/<?=$data['foto']?>" class="rounded-circle" width="30px" alt="">
                                    </td>
                                    <td><?=$data['nama']?></td>
                                    <td><?=$data['namalengkap']?></td>
                                    <td><?=$data['alamat']?></td>
                                    <td>
                                        <?php
                                            if($data['level'] == 1){
                                                echo 'Administrator';
                                            } else if($data['level'] == 2) {
                                                echo 'Supervisor';
                                            }else {
                                                echo 'Operator';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-warning" title="ubah"><i class="fas fa-user-edit"></i></a>
                                        <a href="hapus-pengguna.php?id=<?=$data['penggunaid']?>&foto=<?=$data['foto']?>" class="btn btn-sm btn-danger" title="hapus" onclick="return confirm('Apakah kamu yakin akan menghapus Akun ini')"><i class="fas fa-user-times"></i></a>
                                    </td>
                                </tr>

                                <?php
                                endforeach;
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php
    require "../template/footer.php";
    ?>