<!DOCTYPE html>
<html lang="en">
  <head>
		<?php $this->load->view('admin/meta'); ?>
  </head>

  <body>

	<?php $this->load->view('admin/nav'); ?>
	

    <div class="container">

      <h1>Provided Feedback</h1>
		<p>Manage the feedbacks</p>
	  <br/>	  
	  <h3 class="pull-left">Recent Feedacks</h3>
	  	  
		
	 <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Course Name</th>
				  <th>Description</th>
				  <th>Actions</th>
                </tr>
              </thead>
              
               <tbody>
                
				<tr>
                  <td>1</td>
                  <td>	Java	  </td>
                  <td>jdhfjaksdfhjaskdf</td>
				  <td><a href="#">View Exams</a> | <a href="#">Edit</a> |  <a onclick="return confirm('Are you sure you want to delete?')"  href="#">Delete</a></td>  
				  				  
                </tr>
				<tr>
                  <td>2</td>
                  <td>	PHP	  </td>
                  <td>hehehheheheheh</td>
				  <td><a href="#">View Exams</a> | <a href="#">Edit</a> |  <a onclick="return confirm('Are you sure you want to delete?')"  href="#">Delete</a></td>  
							  
                </tr>
				
              </tbody>
                
              </table>  	  

	      </div> <!-- /container -->
	
	
<?php $this->load->view('admin/nav'); ?>
    

  </body>
</html>
