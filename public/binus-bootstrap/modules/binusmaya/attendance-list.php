<?php include('header.php'); ?>

    <div class="site-content" id="site-content">
        <section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Student Attendance</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Student Attendance</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
            <div class="container">
                <div class="widget-parent" id="widget-parent">
                    <div class="row">
                        <div class="column one-third">
							<div class="widget">
								<div class="widget-body">
									<div class="widget-course-credit">
                                        <div class="course-credit-title">Total Course Credit</div>
                                        <div class="course-credit-description">
                                            To graduate, students must have TAKEN and PASSED all of the required courses listed in their respective Academic Study Plans
                                        </div>
                                        <div class="course-credit-table group-item">
                                            <div class="rows">
                                                <div class="item">
                                                    <div class="course-credit-label">Cumulative<br>Credit</div>
                                                    <div class="course-credit-value">888</div>
                                                </div>
                                                <div class="item">
                                                    <div class="course-credit-label">Remaining<br>Credit</div>
                                                    <div class="course-credit-value yellow">888</div>
                                                </div>
                                            </div>
                                            <div class="rows">
                                                <div class="item">
                                                    <div class="course-credit-label">Credit<br>Fail</div>
                                                    <div class="course-credit-value red">888</div>
                                                </div>
                                                <div class="item">
                                                    <div class="course-credit-label">Credit<br>Earn</div>
                                                    <div class="course-credit-value green">888</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
                        <div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<i class="icon icon-widget-performance"></i>
										<span class="label">
											<span class="title">Widget Perspective</span>
											<span class="pre-title">Widget Subtitle</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-perspective-meter">
										<div class="perspective-meter" data-value="5" data-scale="6">
											<!-- widget goes here -->
											<span class="perspective-legend">
												<span class="score">
													<span class="score-label">Score</span>
													<span class="score-value">5</span>
												</span>
												<span class="state-value">
													<span class="start">1</span>
													<span class="end">6</span>
												</span>
												<span class="description">
													Weight: 100%
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="widget-footer">
									<span class="text-center">Widget Description</span>
								</div>
							</div>
						</div>
                        <div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<i class="icon icon-widget-performance"></i>
										<span class="label">
											<span class="title">Widget Perspective</span>
											<span class="pre-title">Widget Subtitle</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-perspective-meter">
										<div class="perspective-meter" data-value="5" data-scale="6">
											<!-- widget goes here -->
											<span class="perspective-legend">
												<span class="score">
													<span class="score-label">Score</span>
													<span class="score-value">5</span>
												</span>
												<span class="state-value">
													<span class="start">1</span>
													<span class="end">6</span>
												</span>
												<span class="description">
													Weight: 100%
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="widget-footer">
									<span class="text-center">Widget Description</span>
								</div>
							</div>
						</div>
                    </div>
                </div>
				<div class="box-container">
                    <div class="attendance-list">
                        <div class="row student-list">
                            <?php for ($i = 1;$i <= 7;$i++) : ?>
                                <div class="column one-seventh student">
                                    <div class="student-container">
                                        <div class="student-number"><?php echo $i; ?></div>
                                        <div class="student-avatar">
                                            <img src="../../images/statics/avatar.png" alt="Student Avatar">
                                        </div>
                                        <div class="student-details">
                                            1234567890<br>
                                            Rebecca Setiadi
                                        </div>
                                    </div>
                                    <div class="student-action group-item">
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox">
                                            </div>
                                            <div class="item">
                                                Attend
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox">
                                            </div>
                                            <div class="item">
                                                Kumpul Berkas
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox" class="violation-option fancybox.ajax" href="page-violation.php #target-id" id="student-id-<?php echo $i; ?>">
                                            </div>
                                            <div class="item">
                                                Violation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                            <?php for ($i = 8;$i <= 14;$i++) : ?>
                                <div class="column one-seventh student has-warning">
                                    <div class="student-container">
                                        <div class="student-number"><?php echo $i; ?></div>
                                        <div class="student-avatar">
                                            <img src="../../images/statics/avatar.png" alt="Student Avatar">
                                        </div>
                                        <div class="student-details">
                                            1234567890<br>
                                            Rebecca Setiadi
                                        </div>
                                    </div>
                                    <div class="student-action group-item">
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox">
                                            </div>
                                            <div class="item">
                                                Attend
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox">
                                            </div>
                                            <div class="item">
                                                Kumpul Berkas
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox" class="violation-option fancybox.ajax" href="page-violation.php #target-id" id="student-id-<?php echo $i; ?>">
                                            </div>
                                            <div class="item">
                                                Violation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                            <?php for ($i = 15;$i <= 21;$i++) : ?>
                                <div class="column one-seventh student has-error">
                                    <div class="student-container">
                                        <div class="student-number"><?php echo $i; ?></div>
                                        <div class="student-avatar">
                                            <img src="../../images/statics/avatar.png" alt="Student Avatar">
                                        </div>
                                        <div class="student-details">
                                            1234567890<br>
                                            Rebecca Setiadi
                                        </div>
                                    </div>
                                    <div class="student-action group-item">
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox">
                                            </div>
                                            <div class="item">
                                                Attend
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox">
                                            </div>
                                            <div class="item">
                                                Kumpul Berkas
                                            </div>
                                        </div>
                                        <div class="rows">
                                            <div class="item auto-width">
                                                <input type="checkbox" class="violation-option fancybox.ajax" href="page-violation.php #target-id" id="student-id-<?php echo $i; ?>">
                                            </div>
                                            <div class="item">
                                                Violation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="student-form-action">
                            <input type="button" value="Cancel" class="button button-secondary">
                            <input type="submit" value="Save" class="button button-primary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>