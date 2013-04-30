<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('admin/meta'); ?>
</head>

<body>

<?php $this->load->view('admin/nav'); ?>


	<div class="container">

		<h1>Manage Exams</h1>

		<br />
		<h3>
			Recent Exams <span style="font-size: 14px;">(<a
				href="<?php echo site_url("admin/exams/add"); ?>"> Add Exam </a>)</span>
		</h3>


		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Exam Name</th>
					<th>Description</th>
					<th>Full Marks</th>
					<th>Pass Marks</th>
					<th>Start Time</th>
					<th>End Time</th>
					<th>Exam Date</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>
			<?php foreach ($exams as $exam) { ?>

				<tr>
					<td>1</td>
					<td><?php echo $exam['name'];?></td>
					<td><?php echo $exam['description']; ?></td>
					<td><?php echo $exam['full_marks']; ?></td>
					<td><?php echo $exam['pass_marks']; ?></td>
					<td><?php echo $exam['start_time']; ?></td>
					<td><?php echo $exam['end_time']; ?></td>
					<td><?php echo $exam['date']; ?></td>
					<td><a href="#">Details</a> | <a
						href="<?php echo site_url("admin/exams/edit".$exam['id']);?>">Edit</a>
						| <a
						href="<?php echo site_url("admin/exams/delete/".$exam['id']); ?>">Delete</a>
					</td>

				</tr>

				<?php } ?>
			</tbody>

		</table>

	</div>
	<!-- /container -->


	<?php $this->load->view('admin/nav'); ?>


</body>
</html>
