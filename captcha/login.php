<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../index.php");
}
// Panggil koneksi
require_once '../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

// Deklarasikan user dan pass
$password = md5($_POST['password']);
$username = $_POST['username'];

$query = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
$login = $koneksi->query($query);
$row = mysqli_fetch_assoc($login);

// Jika tidak ditemukan user/pass
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        // Jika captcha response tidak kosong
        $captcha = $_POST['g-recaptcha-response'];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => '6LfHIrIkAAAAACdbYQDpJocuyEAIgSBPSC1lrWaI',
            'response' => $captcha
        ];
        $options = [
            'http' => [
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);

        if ($response->success && $row) {
            // Jika captcha dan login berhasil
            session_start();
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            header("location: ../admin/dashboard.php");
            exit;
        } else {
            // Jika captcha atau login gagal
            echo "<script>alert('Login Gagal, Akun tidak ditemukan..!');document.location='../index.php';</script>";
            exit;
        }
    } else {
        // Jika captcha response kosong
        $error = 'Please complete the captcha';
        echo "<script>alert('Silahkan isi captcha');document.location='../index.php';</script>";
        exit;
    }
}
