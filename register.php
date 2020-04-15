<?php
require "config/DeclareClass.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eternam | S'inscrire</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form class="login100-form validate-form flex-sb flex-w" action="#" method="POST">
					<span class="login100-form-title p-b-51">
						S'inscrire
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Pseudo requis">
                    <input class="input100" type="text" name="username" placeholder="Pseudo" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Email requis">
                    <input class="input100" type="text" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Mot de passe requis">
                    <input class="input100" id="pass" type="password" name="pass" placeholder="Mot de passe" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Mot de passe requis">
                    <input class="input100" id="checkpass" type="password" name="pass"
                           placeholder="Répéter mot de passe" required>
                    <span class="focus-input100"></span>
                </div>
                <p class="alert alert-danger" id="passAlert">
                    Password not same
                </p>
                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div>
                        <a href="./" class="txt1">
                            Already have account ?
                        </a>
                    </div>

                    <div>
                        <a href="request_verification.php" class="txt1">
                            Request verification
                        </a>
                    </div>

                </div>
                <div class="container-login100-form-btn m-t-17">
                    <button name="submit" class="login100-form-btn">
                        Valider
                    </button>
                </div>

            </form>
            <script>
                function alertSuccess() {
                    Swal.fire({
                        title: 'success!',
                        text: 'Check your email for confirmation',
                        icon: 'success'
                    });
                    // setTimeout(function () {
                    //     location = "index.php";
                    // }, 100);
                }
            </script>
            <?php
            if (isset($_POST['submit'])) {
                $re = $use->register($_POST['username'], $_POST['email'], $_POST['pass']);
                if ($re == false) {
                    echo "<script> Swal.fire({
                        title: 'error!',
                        text: 'Email already registered',
                        icon: 'error'
                    });</script>";
                } else {
                    echo "<script> alertSuccess(); </script>";
                }

            }
            ?>
            <script>
                $(document).ready(function () {
                    $("#passAlert").hide();
                    var pass = "", passCheck = "";
                    $("#pass").keyup(function () {
                        setTimeout(function () {
                        }, 0);
                        pass = this.value;
                        if (pass != passCheck) {
                            $("#passAlert").show();
                        } else {
                            $("#passAlert").hide();
                        }
                    });

                    $("#checkpass").keyup(function () {
                        setTimeout(function () {
                        }, 0);
                        passCheck = this.value;
                        if (pass != passCheck) {
                            $("#passAlert").show();
                        } else {
                            $("#passAlert").hide();
                        }
                    });
                })
            </script>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>


<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>


