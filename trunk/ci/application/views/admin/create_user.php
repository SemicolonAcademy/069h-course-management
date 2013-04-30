<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('admin/meta'); ?>
</head>

<body>

<?php $this->load->view('admin/nav'); ?>

	<div class="container">

		<h1>Add Users</h1>
		<p>From here you can add users of Online Examination System.</p>

		<br /> <br />

		<form class="form-horizontal"
			action="<?php echo site_url('admin/users/create');?>" method="POST"
			enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="username">Username</label>
				<div class="controls">
					<input type="text" id="username" name="username"
						value="<?php echo set_value('username'); ?>"> <span
						class="help-inline"><?php echo form_error('username'); ?> </span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="password">Password</label>
				<div class="controls">
					<input type="password" id="password" name="password" value=""> <span
						class="help-inline"><?php echo form_error('password'); ?> </span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">Email</label>
				<div class="controls">
					<input type="text" id="email" name="email"
						value="<?php echo set_value('email'); ?>"> <span
						class="help-inline"><?php echo form_error('email'); ?> </span>
				</div>
			</div>
			<div
				class="control-group <?php if (form_error('usertype')) echo "error"; ?>">
				<label class="control-label" for="usertype">Usertype</label>
				<div class="controls">
				<?php echo form_dropdown('usertype', array('-- Select usertype -- ') + $usertype_select);?>
					<span class="help-inline"><?php echo form_error('usertype'); ?> </span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="firstname">First Name</label>
				<div class="controls">
					<input type="text" id="firstname" name="firstname" value="<?php echo set_value('firstname');?>"> <span
						class="help-inline"><?php echo form_error('firstname'); ?> </span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="midname">Middle Name</label>
				<div class="controls">
					<input type="text" id="midname" name="midname" value="<?php echo set_value('midname');?>">
				</div>
			</div>

			<div class="control-group ">
				<label class="control-label" for="lastname">Last Name</label>
				<div class="controls">
					<input type="text" id="lastname" name="lastname" value="<?php echo set_value('lastname');?>"> <span
						class="help-inline"><?php echo form_error('lastname'); ?> </span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="phone">Phone</label>
				<div class="controls">
					<input type="text" id="phone" name="phone" value="<?php echo set_value('phone');?>"> <span
						class="help-inline"><?php echo form_error('phone'); ?> </span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="address">Address</label>
				<div class="controls">
					<input type="text" id="address" name="address" value="<?php echo set_value('address');?>"> <span
						class="help-inline"><?php echo form_error('address'); ?> </span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="website">Website</label>
				<div class="controls">
					<input type="text" id="website" name="website" value="<?php echo set_value('website');?>">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="profilepic">Profile Picture</label>
				<div class="controls">
					<input type="file" name="picture" id="profilepic" value="<?php echo set_value('profilepic');?>" size="20" />  
					<span class="help-inline"><?php echo form_error('profilepic'); ?> </span>
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
