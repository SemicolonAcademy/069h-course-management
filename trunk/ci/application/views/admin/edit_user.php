<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('admin/meta'); ?>
</head>

<body>

<?php $this->load->view('admin/nav'); ?>

	<div class="container">

		<h1>Edit User</h1>
		<p>From here you can Edit user of Online Examination System.</p>

		<br /> <br />
		<form class="form-horizontal"
			action="<?php echo site_url('admin/users/edit/'.$user['users.id']);?>"
			method="POST" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="username">Username</label>
				<div class="controls">
					<input type="text" id="username" name="username"
						value="<?php echo $user['username'];?>"> <span class="help-inline"><?php echo form_error('username'); ?>
					</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="password">Password</label>
				<div class="controls">
					<input type="password" id="password" name="password"
						value="<?php echo $user['password'];?>">
				</div>
				<span class="help-inline"><?php echo form_error('password'); ?> </span>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">Email</label>
				<div class="controls">
					<input type="email" id="email" name="email"
						value="<?php echo $user['email'];?>"> <span class="help-inline"><?php echo form_error('email'); ?>
					</span>
				</div>
			</div>


			<div class="control-group">
				<label class="control-label" for="usertype">User Type</label>
				<div class="controls">
					<select name="usertype" value="<?php echo $user['user_type'];?>">
						<option value="1">Admin</option>
						<option value="2">Teacher</option>
						<option value="3" selected="selected">Student</option>
						<select>
						<?php echo form_dropdown('usertype', array('-- Select usertype -- ') + $usertype_select);?>
							<span class="help-inline"><?php echo form_error('usertype'); ?> </span>
				
				</div>
			</div>


			<div class="control-group">
				<label class="control-label" for="firstname">First Name</label>
				<div class="controls">
					<input type="text" id="firstname" name="firstname"
						value="<?php echo $user['first_name'];?>"> <span
						class="help-inline"><?php echo form_error('firstname'); ?> </span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="midname">Middle Name</label>
				<div class="controls">
					<input type="text" id="midname" name="midname"
						value="<?php echo $user['mid_name'];?>">
				</div>
			</div>

			<div class="control-group ">
				<label class="control-label" for="lastname">Last Name</label>
				<div class="controls">
					<input type="text" id="lastname" name="lastname"
						value="<?php echo $user['last_name'];?>"> <span
						class="help-inline"><?php echo form_error('lastname'); ?> </span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="phone">Phone</label>
				<div class="controls">
					<input type="text" id="phone" name="phone"
						value="<?php echo $user['phone'];?>"> <span class="help-inline"><?php echo form_error('phone'); ?>
					</span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="address">Address</label>
				<div class="controls">
					<input type="text" id="address" name="address"
						value="<?php echo $user['address'];?>"> <span class="help-inline"><?php echo form_error('address'); ?>
					</span>
				</div>
			</div>


			<div class="control-group">
				<label class="control-label" for="website">Website</label>
				<div class="controls">
					<input type="text" id="website" name="website"
						value="<?php echo $user['website'];?>">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="picture">Profile Picture</label>
				<div class="controls">
					<input type="file" id="picture" name="picture"
						value="<?php echo $user['picture'];?>">
				</div>
			</div>


			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn btn-success" name="submit"
						value="Add User">
				</div>
			</div>
		</form>

		<?php $this->load->view('admin/nav'); ?>

</body>
</html>
