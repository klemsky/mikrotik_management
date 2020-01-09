<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BINUS University</title>

        <!-- favicon -->
        <link rel="icon" type="image/png" href="../../images/favicon.ico">

        <!-- load stylesheet -->
        <link rel="stylesheet" href="../../css/themes/university/css/login.css">
        <link rel="stylesheet" href="css/login.css">
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
                                        <img src="../../images/logo.png" alt="Logo">
                                    </a>
                                    <span class="site-description">People Innovation Excellence</span>
                                </div>
                            </header>
                            <section class="breadcrumb">
                                <div class="table-layout fixed">
                                    <div class="table-cell valign-middle step-item current-step">
                                        <span class="step-number">Step 1</span>
                                        <span class="step-name">
                                            Insert<br> Username
                                        </span>
                                    </div>
                                    <div class="table-cell valign-middle step-item">
                                        <span class="step-number">Step 2</span>
                                        <span class="step-name">
                                            Test<br> Location
                                        </span>
                                    </div>
                                    <div class="table-cell valign-middle step-item last-step">
                                        <span class="step-number">Step 3</span>
                                        <span class="step-name">
                                            Form<br> Number
                                        </span>
                                    </div>
                                </div>
                            </section>
                            <section class="main-form">
                                <h2 class="mod-title">Insert Username</h2>
                                <form class="custom-form" action="index-2.php" method="post">
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
                                        <input type="submit" value="Next" class="button button-primary wide">
                                    </p>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>