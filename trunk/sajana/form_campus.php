
<!DOCTYPE html>
<html>
    <body>
	
	<form action = "campus_process.php" method = "POST">	
	<table>
	<tr>
	<td>
	
	<strong>Campus Name</strong><br/>
	<strong>Campus Zone</strong><br/>
	<strong>Campus District</strong><br/>
	<strong>Campus City</strong><br/>
	<strong>Campus Tole</strong><br/>
	<strong>Campus Latitude</strong><br/>
	<strong>Campus Longitude</strong><br/>
	<strong>Campus Type</strong><br/>
	<strong>Campus ProfitStatus</strong><br/>
	<strong>University Name</</strong><br/>
	</td>
	<td>
	<input type = "text" name="CampusName" id="CampusName"><br/>
	<input type = "text" name="CampusZone" id="CampusZone"><br/>
	<input type = "text" name="CampusDistrict" id="CampusDistrict"><br/>
	<input type = "text" name="CampusCity" id="CampusCity"><br/>
	<input type = "text" name="CampusTole" id="CampusTole"><br/>
	<input type = "text" name="CampusLatitude"id="CampusLatitude"></br>
	<input type = "text" name="CampusLongitude" id="CampusLongitude"br/>
	<input type = "text" name="CampusType" id="CampusType"><br/>
	<input type = "text" name="CampusProfitStatus" id="CampusProfitStatus"><br/>
	<?php
			
				$con = mysql_connect('localhost', 'root', '');
				if (!$con) {
					die('Could not connect: ' . mysql_error());
					
				} 
				else{
				
				mysql_select_db("utrack", $con);

				$result = mysql_query("SELECT  UniversityID ,UniversityName FROM university");
				 echo "<select name = \"university\" >";
				 echo "<option></option>";
				while($row = mysql_fetch_array($result))
				  {
					echo "<option value=\"".$row['UniversityID']."\">".$row['UniversityName']."</option>\n  ";				  	
					echo "<br />";
				  }
				  echo "</select>";
				 }
  
		?>		  

			
	</td>
	</tr>
						
		<input type = "submit" value= "Submit" >
			<!--<button>Calculate</button>-->
			
			
						
    </form>
	

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
   

  </body>
</html>