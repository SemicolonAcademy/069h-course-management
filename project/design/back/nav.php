<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php?p=h">Online Examination System</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
				<?php $page = $_GET['p']; ?>
              <li class="<?php if ($page == "h") echo 'active'; ?>" ><a href="index.php?p=h">Home</a></li>
      	      <li class="<?php if ($page == "u") echo 'active'; ?>"><a href="users.php?p=u">Users</a></li>      
			  <li class="<?php if ($page == "c") echo 'active'; ?>"><a href="course.php?p=c">Courses</a></li>			    		  	    
			  <li class="<?php if ($page == "e") echo 'active'; ?>"><a href="exams.php?p=e">Exams</a></li>			    		  	    
			  <li class="<?php if ($page == "q") echo 'active'; ?>"><a href="questions.php?p=q">Questions</a></li>			    		  	    
			  <li class="<?php if ($page == "l") echo 'active'; ?>"><a href="logout.php">Logout</a></li>			    		  	    
			  
			  
             </ul>
			<form class="navbar-form pull-right">
  <input type="text" class="span2">
  <button type="submit" class="btn">Submit</button>
  </form>
  </div>
        </div>
      </div>
    </div>
	