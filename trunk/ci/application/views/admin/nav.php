
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse"
				data-target=".nav-collapse"> <span class="icon-bar"></span> <span
				class="icon-bar"></span> <span class="icon-bar"></span> </a> <a
				class="brand" href="<?php echo site_url('admin/home'); ?>">Online
				Examination System</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="<?php echo ($page == "home") ? "active" : ""; ?>"><a
						href="<?php echo site_url('admin/home'); ?>">Home</a></li>
					<li class="<?php echo ($page == "users") ? "active" : ""; ?>"><a
						href="<?php echo site_url('admin/users'); ?>">Users</a></li>
					<li class="<?php echo ($page == "courses") ? "active" : ""; ?>"><a
						href="<?php echo site_url('admin/courses'); ?>">Courses</a></li>
					<li class="<?php echo ($page == "exams") ? "active" : ""; ?>"><a
						href="<?php echo site_url('admin/exams'); ?>">Exams</a></li>
					<li class="<?php echo ($page == "questions") ? "active" : ""; ?>"><a
						href="<?php echo site_url('admin/questions'); ?>">Questions</a></li>
					<li class="<?php echo ($page == "feedback") ? "active" : ""; ?>"><a
						href="<?php echo site_url('admin/home/feedback'); ?>">Feedback</a>
					</li>
				</ul>


				<form class="navbar-form pull-left" method="POST"
					action="<?php echo site_url('admin/users/search')?>">
					<input type="text" class="span2" name="query">
					<button type="submit" class="btn">Submit</button>
				</form>


			</div>
			<!--/.nav-collapse -->



		</div>
	</div>
</div>
