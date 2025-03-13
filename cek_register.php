<?php
$title = 'Tambah Data Pengguna';
include 'koneksi.php';


if (isset($_POST['btn-simpan'])) {
    $nama = $_POST['nama_user'];
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $role = $_POST['role'];
    $query = "INSERT INTO tb_user (nama_user, username, password, role) values ('$nama', '$username', '$password', '$role')";

    $insert = mysqli_query($conn, $query);
    if ($insert == 1) {

        $_SESSION['msg'] = 'Berhasil menambahkan ' . $role . ' baru';
        header('location:index.php');
    } else {
        $_SESSION['msg'] = 'Gagal mengubah data!!!';
        header('location: register.php');
    }
}


?>