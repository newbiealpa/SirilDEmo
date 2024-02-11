<!DOCTYPE html>
<html>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nama'])) {

include "db_conn.php";
include 'php/User.php';
$user = getUserById($_SESSION['id'], $conn);
 ?>

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Home</title>
</head>

<body>
    <?php if ($user) { ?>
    <div class="d-flex justify-content-center align-items-center vh-100"
        style="background-image: linear-gradient(black,rgb(15, 68, 114),rgb(20,80,170),white);">
        <div class="shadow w-350 p-3 text-center">
            <p class="fs-4 text-light"> &#128640; Hello Maestro IT &#128640;
                <br> &#x1F31F;Welcome To Offcial Website Siril Community &#x1F31F;</br>
            </p>
            <p class="text-light fs-6"> Nama: <?=$user['nama']?>
                <br> Divisi: <?=$user['divisi']?> </br>
                Email: <?=$user['email']?>
            </p>

            <a href=" logout.php" class="btn btn-warning">
                Logout
            </a>
        </div>
    </div>
    <?php }else { 
     header("Location: login.php");
     exit;
    } ?>

    <!-- Footer -->
    <section id="contact">
        <footer class="text-center text-lg-start text-light bg-dark">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-lg-3 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>
                        <h5> Get connected with us on social networks: </h5>
                    </span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <div class="container p-3 m-1 pb-0 justify-content-center">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #3b5998;" href="#!" role="button"><i
                                    class="bi-facebook"></i></a>

                            <!-- Twitter -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #55acee;" href="https://twitter.com/Siril_Community"
                                role="button"><i class="bi-twitter"></i></a>

                            <!-- Discord-->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #5739dd;" href="#!" role="button"><i
                                    class="bi-discord"></i></a>

                            <!-- Instagram -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #ac2bac;"
                                href="https://instagram.com/siril_community?igshid=NGVhN2U2NjQ0Yg==" role="button"><i
                                    class="bi-instagram"></i></a>

                            <!-- Youtube -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #ca0000;"
                                href="https://www.youtube.com/channel/UCWl2M-rz1ZhShveKvvoPypA" role="button"><i
                                    class="bi-youtube"></i></a>
                            <!-- Github -->
                            <a class="btn text-white btn-floating fs-4 m-3 rounded-circle"
                                style="background-color: #0b0b0b;" href="https://github.com/SirilCommunityUINRIL23"
                                role="button"><i class="bi-github"></i></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                </div>
                <!-- Right -->
            </section>
    </section>
    <!-- Section: Social media -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright
    </div>
    <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsX
</body>

<?php }else {
	header("Location: login.php");
	exit;
} ?>
</html>