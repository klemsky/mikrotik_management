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
                <div class="user-form wide-layout">
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
                            <section class="main-content">
                                <div class="table-layout">
                                    <div class="table-cell valign-bottom">
                                        <div class="slideshow">
                                            <div class="slideshow-container">
                                                <ul class="list-slideshow">
                                                    <li class="slideshow-item">
                                                        <a href="#">
                                                            <img src="images/statics/post-thumbnail.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="slideshow-item">
                                                        <a href="#">
                                                            <img src="images/statics/post-thumbnail.jpg" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="slideshow-pager"></div>
                                        </div>
                                    </div>
                                    <div class="table-cell valign-bottom auto-width has-divider">
                                        <div class="sidebar">
                                            <div class="site-brand">
                                                <a href="#" class="image-container">
                                                    <img src="images/logo/logo-binusmaya.png" alt="Logo">
                                                </a>
                                                <a href="#" class="button button-primary wide">Login</a>
                                            </div>
                                            <div class="usefull-links">
                                                <ul class="list-links">
                                                    <li class="link-item">
                                                        <a href="#">Forgot Your Password?</a>
                                                    </li>
                                                    <li class="link-item">
                                                        <a href="#">Get Your Username</a>
                                                    </li>
                                                    <li class="link-item">
                                                        <a href="#">Login as Staff</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <footer class="footer">
                                <span class="notification">Please login using the form on the up side of this page. This Binusmaya version is still in early development stage, so you may encounter some defects or problems. Please kindly report any problems you found with the form we provided on the top navigation menu.</span>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- javascript -->
        <script src="js/jquery.js"></script>
        <script src="js/sly.js"></script>
        <script>
            (function($) {
                $(document).ready(function() {
                    if ($('.slideshow').length > 0) {
                        var $slide  = $('.slideshow');
                        var $wrap   = $slide.find('.slideshow-container');
                        var $target = $wrap.find('.list-slideshow');
                        var $item   = $target.find('.slideshow-item');
                        var $pager  = function($index) {
                                return '<a>&nbsp;</a>';
                        };

                        $wrap.sly({
                            horizontal: 1,
                            speed: 500,
                            pagesBar: $slide.find('.slideshow-pager'),
                            pageBuilder: $pager,
                            itemNav: 'basic',
                            activatePageOn: 'click',
                            touchDragging: true
                        });
                    }
                });
            })(jQuery);
        </script>
    </body>
</html>