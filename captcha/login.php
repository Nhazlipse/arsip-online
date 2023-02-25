<?php
// panggil koneksi
require_once '../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

// periksa apakah username valid
if (isset($_POST['username']) && $_POST['username']) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
} else {
    // set error message and redirect back to form... 
    header('location: ../index.php');
    exit;
}

// verifikasi reCAPTCHA
$token = $_POST['token'];
$action = $_POST['action'];

// call curl to POST request 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('6Lf8hLEkAAAAAIXJq86DhMDo12ENFEnsa5jScb20', 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

// verify the response 
if ($arrResponse["success"] != '1' || $arrResponse["action"] != $action || $arrResponse["score"] < 0.5) {
    // tampilkan pesan error jika reCAPTCHA tidak valid
    echo "<script>alert('reCAPTCHA tidak valid!');document.location='../index.php';</script>";
    exit;
}

// deklarasikan user dan pass
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// hindari SQL injection dengan parameter binding
$query = "SELECT * FROM tb_admin WHERE username=?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

// periksa apakah username dan password valid
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hash = $row['password'];

    // periksa apakah password cocok dengan hash
    if (password_verify($password, $hash)) {
        // start session
        session_start();
        $_SESSION['id_admin'] = $row['id_admin'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];

        // redirect ke halaman dashboard
        header("location: dashboard.php");
        exit;
    }
}

// tampilkan pesan error jika login gagal
echo "<script>alert('Login Gagal, Akun tidak ditemukan..!');document.location='../index.php';</script>";
exit;
