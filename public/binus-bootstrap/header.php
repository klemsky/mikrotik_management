<?php require('access.php'); ?>

<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BINUS</title>

		<!-- Favicon -->
		<link rel="Shortcut Icon" type="image/png" href="images/favicon.ico">

		<!-- Stylesheet -->
        <?php
            $theme_name = 'university';
            if (!empty($_SESSION['site_theme'])) {
                $theme_name = $_SESSION['site_theme'];
            }
        ?>
		<link rel="stylesheet" type="text/css" href="css/themes/<?php echo $theme_name; ?>/css/style.css">

		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div id="page" class="main-container">
			<section class="tagline-banner new-layout">
				<div class="container">
					<div class="wrap">
						<span class="banner">
							<span class="banner-image"></span>
						</span>
						<span class="tagline">People Innovation Excellence</span>
					</div>
				</div>
			</section>

			<header class="header" id="header">
                <div class="header-top">
                    <div class="container">
                        <section class="logo">
                            <a href="index.php">
                                <?php if ($_SESSION['site_theme'] == 'edu') : ?>
                                    <img src="images/logo/logo-binus-portal.png" alt="Logo">
                                <?php elseif ($_SESSION['site_theme'] == 'school') : ?>
                                    <img src="images/logo/logo-binus-school-bekasi.png" alt="Logo">
                                <?php elseif ($_SESSION['site_theme'] == 'affiliation') : ?>
                                    <img src="images/logo/logo-basemaya.png" alt="Logo">
								<?php elseif ($_SESSION['site_theme'] == 'corporate') : ?>
									<img src="images/logo/logo-binuscenter.png" alt="Logo">
								<?php else : ?>
									<img src="images/logo.png" alt="Logo">
                                <?php endif; ?>
                            </a>
                        </section>
                    </div>
                </div>

                <div class="header-bottom">
                    <div class="container">
                        <section class="top-navigation">
                            <nav class="navigation">
                                <div class="container">
                                    <span class="logo-nav">
                                        <span class="logo-text">
                                            <span class="business-unit">Bina Nusantara<br/> University</span>
                                            <span class="app-name">Corporate<br/> Name</span>
                                        </span>
                                    </span>

                                    <ul class="menu left">
                                        <li class="expand-menu expand-item-menu">
                                            <a href="#" class="expand-action-menu">
                                                <i class="icon icon-burger-menu"></i>
                                                <span class="label">Menu</span>
                                            </a>
                                            <div class="expand-menu-container">
                                                <ul class="sub-menu main-menu primary-menu">
                                                    <li><a href="index.php">Dashboard</a></li>
                                                    <li class="has-menu">
                                                        <a href="#">Samples</a>
                                                        <ul class="sub-sub-menu">
                                                            <li><a href="sample-archive.php">Archive</a></li>
                                                            <li><a href="sample-forms.php">Forms</a></li>
                                                            <li><a href="sample-icons.php">Icons</a></li>
                                                            <li><a href="login.php">Login Page</a></li>
                                                            <li><a href="login-binusmaya.php">Login BINUSMAYA</a></li>
                                                            <li><a href="sample-notification.php">Notification</a></li>
                                                            <li class="has-menu">
                                                                <a href="#">Others</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li><a href="sample-toogle-table.php">Toggle Table</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="sample-page.php">Single Page</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-menu">
                                                        <a href="#">Documentation</a>
                                                        <ul class="sub-sub-menu">
                                                            <li><a href="getting-started.php">Getting Started</a></li>
                                                            <li><a href="documentation-widgets.php">Widgets</a></li>
                                                            <li><a href="documentation-forms.php">Forms</a></li>
                                                            <li><a href="documentation-grids.php">Grid System</a></li>
                                                            <li class="has-menu">
                                                                <a href="#">Pre Content</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li><a href="documentation-agenda-navigation.php">Agenda Navigation</a></li>
                                                                    <li><a href="documentation-body-navigation.php">Body Navigation</a></li>
                                                                    <li><a href="documentation-breadcrumb.php">Breadcrumb</a></li>
                                                                    <li><a href="documentation-user-content.php">User Content</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-menu">
                                                                <a href="#">Contents</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li><a href="documentation-button.php">Button</a></li>
                                                                    <li><a href="documentation-table.php">Table</a></li>
                                                                    <li><a href="documentation-typography.php">Typography</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-menu">
                                                                <a href="#">Components</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li><a href="documentation-advanced-combobox.php">Advanced Combobox</a></li>
                                                                    <li><a href="documentation-accordion-toggle.php">Accordion &amp; Toggle</a></li>
                                                                    <li><a href="documentation-content-editor.php">Content Editor</a></li>
                                                                    <li><a href="documentation-form-loader.php">Form Loader</a></li>
                                                                    <li><a href="documentation-freeze-pane.php">Freeze Pane</a></li>
                                                                    <li><a href="documentation-fullcalendar.php">Fullcalendar</a></li>
                                                                    <li><a href="documentation-input-group.php">Input Group</a></li>
                                                                    <li><a href="documentation-legend.php">Legend</a></li>
                                                                    <li><a href="documentation-pagination.php">Pagination</a></li>
                                                                    <li><a href="documentation-popup.php">Popup</a></li>
                                                                    <li><a href="documentation-search-filter.php">Search Filter</a></li>
                                                                    <li><a href="documentation-tabulation.php">Tabulation</a></li>
                                                                    <li><a href="documentation-tooltip.php">Tooltip</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="download-00371q6NX08pNHA8g8n6q58e.php">Download Package</a>
                                                    </li>
                                                    <li class="has-menu">
                                                        <a href="#">Modules</a>
                                                        <ul class="sub-sub-menu">
                                                            <li class="has-menu">
                                                                <a href="#">BINUS AMI</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li><a href="modules/binus-ami/admin-dashboard.php">Admin</a></li>
                                                                    <li><a href="modules/binus-ami/auditee-dashboard.php">Auditee</a></li>
                                                                    <li><a href="modules/binus-ami/auditor-dashboard.php">Auditor</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-menu">
                                                                <a href="#">BINUS Career</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li><a href="modules/binus-career/employeer-dashboard.php">Employeer</a></li>
                                                                    <li><a href="modules/binus-career/student-dashboard.php">Student</a></li>
                                                                    <li><a href="modules/binus-career/alumni-dashboard.php">Alumni</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-menu">
                                                                <a href="#">BINUS LMS</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li><a href="modules/binus-lms/courseview-dashboard.php">Course View</a></li>
                                                                    <li><a href="modules/binus-lms/dashboard-student-dashboard.php">Dashboard View For Student</a></li>
                                                                    <li><a href="modules/binus-lms/dashboard-lecturer-dashboard.php">Dashboard View For Lecturer</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="modules/binus-portal/">BINUS Portal</a></li>
                                                            <li><a href="modules/binus-school-admission-bekasi/">BINUS School Admission Bekasi</a></li>
                                                            <li class="has-menu">
                                                                <a href="#">BINUSMAYA</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li><a href="modules/binusmaya/attendance-details.php">Attendance Details</a></li>
                                                                    <li><a href="modules/binusmaya/attendance-list.php">Attendance List</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="modules/binus-tpks/">BINUS TPKS</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-menu">
                                                        <a href="#">Sub Menu</a>
                                                        <ul class="sub-sub-menu">
                                                            <li class="has-menu">
                                                                <a href="#">Level 2 Item</a>
                                                                <ul class="sub-sub-menu">
                                                                    <li class="has-menu">
                                                                        <a href="#">Level 3 Item</a>
                                                                        <ul class="sub-sub-menu">
                                                                            <li><a href="#">Level 4 Item</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Additional Menu</a>
                                        </li>
                                    </ul>

                                    <ul class="menu right">
                                        <li class="expand-notification expand-item has-child">
                                            <a href="#" class="expand-action">
                                                <i class="icon icon-information"></i>
                                                <span class="notif-count">999</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="sub-title">
                                                    Notification
                                                    <a href="#">Read All</a>
                                                </li>
                                                <li class="list-notification">
                                                    <div class="notification">
                                                        <span class="thumbnail">
                                                            <img src="images/statics/avatar.png" alt="">
                                                        </span>
                                                        <span class="details">
                                                            <span class="description">
                                                                New Comment on <a href="#">Designing Web Interface</a>
                                                            </span>
                                                            <span class="date">28 Oktober 2014 | 11.00 pm</span>
                                                        </span>
                                                    </div>
                                                    <div class="notification">
                                                        <span class="thumbnail">
                                                            <img src="images/statics/avatar.png" alt="">
                                                        </span>
                                                        <span class="details">
                                                            <span class="description">
                                                                New Comment on <a href="#">Designing Web Interface</a>
                                                            </span>
                                                            <span class="date">28 Oktober 2014 | 11.00 pm</span>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="view-all">
                                                    <a href="sample-notification.php">View All Notification</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="expand-settings expand-item has-child">
                                            <a href="#" class="expand-action">
                                                <span class="label">Rebecca Setiadi</span>
                                                <img src="images/statics/avatar.png" alt="">
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="sub-title">Profile</li>
                                                <li class="setting-content">
                                                    <div class="avatar"><img src="images/statics/avatar.png" alt=""></div>
                                                    <div class="details">
                                                        <span class="student-name">Rebecca Setiadi</span>
                                                        <span class="email-address">rsetiadi@gmail.com</span>
                                                        <span class="link">
                                                            <a href="#">Dashboard</a>
                                                        </span>
                                                        <span class="link">
                                                            <a href="#">Account Settings</a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="logout">
                                                    <a href="logout.php">Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="expand-search-form">
                                            <span class="wrapper">
                                                <span class="icon-click-area"></span>
                                                <i class="icon icon-search"></i>
                                                <form action="get" action="index.php" class="search-form">
                                                    <span class="search-wrap">
                                                        <input type="text" name="search-keyword" id="search-keyword" class="search-form-field" placeholder="Type and press enter..">
                                                    </span>
                                                </form>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </section>
                    </div>
				</div>
			</header>
