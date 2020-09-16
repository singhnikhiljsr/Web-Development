<?php
$mysqli=mysqli_connect("localhost:3320","root","password","galwanvalley") or die("database error");

$getData = $_GET['term'];
$query = $ mysqli -> query("select email from payment where email like '%".$getData."%'");
while($row = $query -> fetch_assoc()){
	$data[] = $row ['email'];
}
 echo json_encode($data);
?>