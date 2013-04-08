<!DOCTYPE html>
<html lang="en">
  <head>
		<?php $this->load->view('admin/meta'); ?>
  </head>

  <body>

	<?php $this->load->view('admin/nav'); ?>
	

    <div class="container">

      <h1>Manage Users</h1>
		<p>From here you can manage users of Online Examination System.</p>
	  <br/>	  
	  <h3 class="pull-left">Recent Users <span style="font-size:14px;">(<a href="<?php echo site_url("admin/users/create/"); ?>"> Add Users </a> | <a href=""> User Types</a>)</span></h3>
	  	  
		
	 <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Picture</th>
                  <th>Username</th>
				  <th>Email</th>
				  <th>Full Name</th>
				  <th>Phone</th>
                  <th>User Type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              
               <tbody>
               <?php foreach ($users as $user) { ?> 
				
				<tr>
                  <td>1</td>
                  <td><?php if ($user['picture']) {?>
					
					<a id="lightbox" href="<?php echo "uploads/". $user['picture'];?>" >
						<img width="80" height="80" src="<?php echo "uploads/". $user['picture'];?>" />
					</a>
					
					<?php }  else { ?>
					
						<img width="80" height="80" src="<?php echo "uploads/default.gif";?>" />
					
					<?php } ?>
					</td>
                  <td><?php echo $user['username']; ?></td>
				  <td><?php echo $user['email']; ?></td>
				  <td><?php echo $user['first_name']." ".$user['mid_name']." ".$user['last_name']; ?></td>
				  <td><?php echo $user['phone']; ?></td>
				  <td><?php echo $user['user_type']; ?></td>
                  <td><a href="#">Details</a> | <a href="<?php echo site_url("admin/users/edit/".$user['id']);?>">Edit</a> | <a  href="<?php echo site_url("admin/users/delete/".$user['id']); ?>" >Delete</a></td>
				  				  
                </tr>          
                              
                <?php } ?>
				
              </tbody>
                
              </table>  	  

	      </div> <!-- /container -->
	
	
<?php $this->load->view('admin/nav'); ?>
    

  </body>
</html>
