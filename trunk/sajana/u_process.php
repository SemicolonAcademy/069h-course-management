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
				$sel_university= $_POST["university"];
				$sel_campus = $_POST["campus"];
				$sel_sub = $_POST["subject"];
				//if($sel_university =="" && $sel_campus == "" ){
			
				/*$result = mysql_query("	SELECT c.CampusId, c.CampusName,
										FROM campus c,subject s,
								     department d
									 and s.departmentId = d.departmentId and s.SubjectName  = $sel_sub) 
									 WHERE c.CampusId = d.CampusId 					
									");*/
													
				//$result = mysql_query("SELECT  campus.CampusName FROM campus where campus.CampusId = (Select department.CampusId from department where  department.departmentId=(select  subject.departmentId from subject where  subject.SubjectId = $sel_sub))");
					/*$result = mysql_query("SELECT  campus.CampusName , university.UniversityName 
					FROM campus ,university where university.UniversityId = $sel_university 
					and  campus.CampusId = (Select department.CampusId 
					from department where  department.departmentId=(select  subject.departmentId from subject where  subject.SubjectId = $sel_sub))");
					*/
					if($sel_university == "" and $sel_campus == "" and $sel_sub == "" ){
						$result = mysql_query("SELECT  campus.CampusName , university.UniversityName, subject.SubjectName from campus 
												 INNER JOIN university ON university.UniversityId = campus.UniversityId
												 INNER JOIN department ON department.campusID = campus.campusID
											     INNER JOIN subject    ON subject.departmentId = department.departmentId
												 ");
					}
					else if($sel_university == "" and $sel_campus == ""){
						$result = mysql_query("SELECT  campus.CampusName , university.UniversityName, subject.SubjectName from campus
											   INNER JOIN university ON university.UniversityId = campus.UniversityId
											   INNER JOIN department ON department.campusID = campus.campusID
											   INNER JOIN subject    ON subject.departmentId = department.departmentId
											   WHERE subject.SubjectId = $sel_sub ");
					}
					else if( $sel_campus == "" and $sel_sub == "" ){
						$result = mysql_query("SELECT  campus.CampusName , university.UniversityName,subject.SubjectName from university
											   INNER JOIN campus ON campus.UniversityId = university.UniversityId
											   INNER JOIN department ON department.campusID = campus.campusID
											   INNER JOIN subject    ON subject.departmentId = department.departmentId
											    WHERE university.UniversityId = $sel_university ");
					}
					else if($sel_university == "" and $sel_sub == "" ){
						$result = mysql_query("SELECT  campus.CampusName , university.UniversityName, subject.SubjectName from campus
											   INNER JOIN university ON university.UniversityId = campus.UniversityId
											   INNER JOIN department ON department.campusID = campus.campusID
											   INNER JOIN subject    ON subject.departmentId = department.departmentId
											   WHERE campus.CampusId = $sel_campus ");
					
					}
					else{
					$result = mysql_query("SELECT  campus.CampusName , university.UniversityName, subject.SubjectName
							  FROM campus
							  INNER JOIN university ON university.UniversityId = campus.campusID
							  INNER JOIN department ON department.campusID = campus.campusID
							  INNER JOIN subject    ON subject.departmentId = department.departmentId
							  WHERE 	university.UniversityId = $sel_university 
									AND  campus.CampusId = $sel_campus
									AND subject.SubjectId = $sel_sub");
					}
				//}
				//else
		//	$result = mysql_query("SELECT  CampusName  FROM campus where campus.UniversityID = $sel_university ");
				
			while($row = mysql_fetch_array($result))
				  {
				  echo "<tr><td>";
					echo $row['CampusName']."</td>";
					
					echo "<td>".$row['UniversityName']."</td>";
					echo "<td>".$row['SubjectName']."</td>";
				  echo"</tr>";		
					$count++;
			}
			echo $row ;
			if($count == 0){
			echo "<tr><td colspan = \"3\" align=\"center\">";
				echo "no records available";
			echo"</td></tr>";
			}
			
			
			}
			?>
			</tbody>
			</table>
			
				