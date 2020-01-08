<?php

$password = '1e8I90N*5E';
$password = '';
$password = sha1($password);

session_start();

if (!isset($_SESSION['3Qg85CnALg'])) {
	$_SESSION['3Qg85CnALg'] = false;
}

if (isset($_POST['user_pass']) && !empty($_POST['site_theme'])) {
	if (sha1($_POST['user_pass']) == $password) {
		$_SESSION['3Qg85CnALg'] = true;
        $_SESSION['site_theme'] = $_POST['site_theme'];
	} else {
		die('Incorrect password.');
	}
}

if (!$_SESSION['3Qg85CnALg']) :
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BINUS University</title>

        <!-- favicon -->
        <link rel="icon" type="image/png" href="images/favicon.ico">

        <!-- load stylesheet -->
        <link rel="stylesheet" href="css/themes/university/css/style.css">
        <link rel="stylesheet" href="css/themes/university/css/login.css">
    </head>

    <body>
        <div id="page" class="site">
            <div class="overlay">
                <div class="user-form">
                    <div class="user-form-container">
                        <div class="user-form-content">
                            <header class="header">
                                <span class="ribbon"></span>
                                <div class="logo">
                                    <a href="index.php" class="site-name">
                                        <img src="images/logo.png" alt="Logo">
                                    </a>
                                    <span class="site-description">People Innovation Excellence</span>
                                </div>
                            </header>
                            <section class="main-form">
                                <form class="custom-form" action="" method="post">
                                    <p>
                                        <span class="custom-textbox">
                                            <span class="icon-wrap">
                                                <i class="icon icon-pass"></i>
                                            </span>
                                            <input type="password" name="user_pass" placeholder="Password" class="input-form">
                                        </span>
                                    </p>
                                    <p>
                                        <span class="custom-combobox">
                                            <select name="site_theme">
                                                <option value="">Select Theme</option>
                                                <option value="university">University</option>
                                                <option value="edu">Edu</option>
                                                <option value="school">School</option>
                                                <option value="affiliation">Affiliation</option>
                                                <option value="corporate">Corporate</option>
                                            </select>
                                        </span>
                                    </p>
                                    <p>
                                        <input type="submit" value="Login" class="button button-primary wide">
                                    </p>
                                </form>
                            </section>
                            <footer class="footer">
                                <div class="usefull-links">
                                    <a href="forgot-password.php" class="link-item">Forgot Your Password?</a>
                                    <a href="index.php" class="link-item">Back to Home</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- JavaScript -->
		<script src="js/jquery.js"></script>
		<script src="js/plugins/combobox.js"></script>
        <script>
            (function($) {
                $(document).ready(function() {
                    $('.custom-combobox', this).binus_combobox();
                });
            })(jQuery);
        </script>
    </body>
</html>

<?php
exit();
endif;
?>
