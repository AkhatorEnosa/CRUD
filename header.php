div class="navbar navbar-inverse navbar-fixed-top" id="nav-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a class="navbar-brand page-scroll" href="#">RegIT</a>
						</div>

						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="index.php">Home</a></li>
								<li class="dropdown">
									<a href="#" class="drop dropdown-toggle" data-toggle="dropdown">Shortcuts<i class="caret"></i></a>

										<ul class="dropdown-menu">
											<li><a href="register.php">Register</a></li>
											<li><a href="post.php">Post</a></li>
											<li><a href="posted.php">View all activity</a></li>
										</ul>
								</li>
								<li><a href="#">Contact</a><li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo strtoupper($_SESSION['name'])?></a></li>
								<li><?php
									if(isset($_SESSION['name'])){
										echo '<a href=\'logout.php\'>Logout&nbsp;&nbsp;<span class="fa fa-sign-out"></span></a>';
									}
								?></li>
							</ul>
						</div>
					</div>
				</div>
