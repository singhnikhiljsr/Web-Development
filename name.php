<?php
$mysqli=mysqli_connect("localhost:3320","root","password","galwanvalley") or die("database error");

$getData = $_GET['term'];
$query = $ mysqli -> query("select name from payment where name like '%".$getData."%'");
while($row = $query -> fetch_assoc()){
	$data[] = $row ['name'];
}
 echo json_encode($data);
?>