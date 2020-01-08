<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BINUS University</title>

        <!-- favicon -->
        <link rel="icon" type="image/png" href="images/favicon.ico">

        <!-- load stylesheet -->
        <?php
            $theme_name = 'university';
            if (!empty($_SESSION['site_theme'])) {
                $theme_name = $_SESSION['site_theme'];
            }
        ?>
		<link rel="stylesheet" type="text/css" href="css/themes/<?php echo $theme_name; ?>/css/login.css">
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
                                                <i class="icon icon-user"></i>
                                            </span>
                                            <input type="text" name="input" placeholder="Username" class="input-form">
                                        </span>
                                    </p>
                                    <p>
                                        <span class="custom-textbox">
                                            <span class="icon-wrap">
                                                <i class="icon icon-pass"></i>
                                            </span>
                                            <input type="password" name="input" placeholder="Password" class="input-form">
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
    </body>
</html>