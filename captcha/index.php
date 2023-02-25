<!DOCTYPE html>
<html lang="en">
<?php
include './layout/header.php';
include '../database/koneksi.php';
?>

<!-- ... HTML code ... -->

<head>
    <title>Arsip Kita - Kediri</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>

    <script src="https://www.google.com/recaptcha/api.js?render=6LeKH7IkAAAAAHehEYcO9Gr3KwbdZDgo28q6Rv3S"></script>
</head>

<body class="bg-color-warning" style="background-image: url('../assets/img/background.png'); background-repeat: no-repeat; background-position: center; background-size: cover ;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-6">

                <div class="card o-hidden my-5">
                    <div class="card-body p-4">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-lg-block bg-white p-6 text-center"><br>
                                <img src="../assets/img/arsip.png" width="90%"><br><br><br>
                                <img src="../assets/img/tulisan.png" width="55%">
                            </div>

                            <div class="col-lg-5">
                                <div class="p-4">

                                </div>
                                <div class="text-center"><br>
                                    <h1 class="h2 text-gray-900 mb-4" style="font-size:38px; font-family: bold; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Selamat Datang</h1>
                                </div>

                                <form id="loginForm" class="user" action="login.php" method="POST" style="margin-top:30px;">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LfHIrIkAAAAAPf_-i9ZdxJeTH5yakwM1Wn9quZB"></div>

                                    <button class="btn btn-primary btn-user btn-block" type="submit" style="height:1,5cm;width:4cm;position:absolute;top:90%;left: 31%;font-size:19px;font-family:bold;">Login</button>
                                    <br>
                                </form>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</html>
<?php include './layout/footer.php'; ?>