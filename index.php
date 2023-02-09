<!DOCTYPE html>
<html lang="en">

<?php 
include 'header.php'; 
include './database/koneksi.php';
?>

<head>

    <title>Arsip Online - Kediri</title>

</head>

<body class="bg-color-warning" style="background-image: url('./assets/img/arsip.png'); background-size: cover;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        <div class="col-lg-6 d-lg-block bg-primary shadow-lg p-5 text-center">
                                <h3 class="text-white"><b>Arsip Online <br> Kediri</b></h3>
                                <img src="./assets/img/undraw_profile.svg" alt="" width = "80%">
                            </div>

                            <div class="col-lg-6">
                                <div class="p-5">

                            </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <form class="user" action="./admin/login.php" method="POST">
                                    <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
                                        </a>
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>

<?php include 'footer.php'; ?>