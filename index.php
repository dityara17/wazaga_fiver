<?php
require "config/DeclareClass.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eternam | Se connecter</title>
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
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Se connecter
					</span>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Pseudo requis">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Mot de passe requis">
                    <input class="input100" type="password" name="pass" placeholder="Mot de passe">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Se souvenir
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1">
                            Mot de passe oublié
                        </a>
                    </div>

                    <div>
                        <a href="register.php" class="txt1">
                            S'inscrire
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button name="submit" class="login100-form-btn">
                        Valider
                    </button>
                </div>

            </form>
            <?php
            if (isset($_POST['submit'])) {
                $c = $use->login($_POST['email'], $_POST['pass']);
                if ($c == 'ok') {
                    echo "<script>alert('Welcome');location='connected/index.php';</script>";
                } else if ($c == 'bad') {
                    echo "<script>alert('Your email or password does not match')</script>";
                } else if ($c == 'verify') {
                    echo "<script>alert('need to verify your email ');</script>";

                }
            }
            ?>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
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