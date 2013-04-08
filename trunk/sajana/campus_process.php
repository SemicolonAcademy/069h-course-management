<?php /*
include "dbconnect.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";*/
?>
<table border="2">
	<thead>
      <tr>
	<th>Campus</th>
	<th>University</th>
	<th>Subject</th>
	</tr>
	</thead>	           
	<tbody>
<?php
$count=0;
$con = mysql_connect('localhost', 'root', '');
				if (!$con) {
					die('Could not connect: ' . mysql_error());
					
				} 
				else{
				
				mysql_select_db("utrack", $con);
				$sel_name= $_POST["CampusName"];
				$sel_zone = $_POST["CampusZone"];
				$sel_district = $_POST["CampusDistrict"];
				$sel_city = $_POST["CampusCity"];
				$sel_tole = $_POST["CampusTole"];
				$sel_lat  = $_POST["CampusLatitude"];
				$sel_long = $_POST["CampusLongitude"];
				$sel_type = $_POST["CampusType"];
				$sel_profit = $_POST["CampusProfitStatus"];
				$sel_univ = $_POST["UniversityName"];
			
<?php
							
			if(mysql_query("INSERT INTO campus VALUES ('',$sel_name, $sel_zone, $sel_district, $sel_city, $sel_tole, $sel_lat, $sel_long ,$sel_type,$sel_profit, $sel_univ)")){
			  //success
			}
				
			?>
			</tbody>
			</table>
			
				