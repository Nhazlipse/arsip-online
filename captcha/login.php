<?php
session_start();

require_once '../database/koneksi.php';
use database\koneksi;
$koneksi = new koneksi();

// Check if CAPTCHA is valid
if(isset($_POST['submit'])) {
    require_once 'recaptcha/autoload.php';

    $secret_key = "YOUR_SECRET_KEY";
    $response = $_POST['g-recaptcha-response'];

    $recaptcha = new \ReCaptcha\ReCaptcha($secret_key);
    $resp = $recaptcha->verify($response, $_SERVER['REMOTE_ADDR']);

    if ($resp->isSuccess()) {
        // CAPTCHA is valid, continue with login process
        $password = md5($_POST['password']);
        $username = $_POST['username'];

        $query = "SELECT * FROM tb_admin WHERE username='$username' and password = '$password'";
        $login = $koneksi->query($query);
        $data = mysqli_fetch_array($login);

        if ($data) {
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            header("location: dashboard.php");
        } else {
            echo "<script>alert('Login Gagal, Akun tidak ditemukan..!');document.location='../index.php';</script>";
        }
    } else {
        // CAPTCHA is not valid, show error message
        echo "<script>alert('Captcha tidak valid..!');document.location='../index.php';</script>";
    }
}
?>
