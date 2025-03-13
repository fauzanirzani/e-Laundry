<?php
session_start();
// $conn = mysqli_connect("localhost", "root", "", "laundry");
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");
// $row = mysqli_query($conn, $query);
// $data = mysqli_fetch_assoc($row);
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);
    if ($data['role'] == 'admin') {
        $_SESSION['role'] = 'admin';
        $_SESSION['username'] = $data['username'];
        $_SESSION['user_id'] = $data['id_user'];
        $_SESSION['msg'] = 'Berhasil Login Sebagai Admin';
        header('location:admin');
    } else if ($data['role'] == 'user') {
        $_SESSION['role'] = 'user';
        $_SESSION['username'] = $data['username'];
        $_SESSION['user_id'] = $data['id_user'];
        $_SESSION['msg'] = 'Berhasil Login Sebagai User';
        header('location:user');
    } 
} else {
    $message = 'Username atau password salah!!!';
    header('location:index.php?message=' . $message);
}
