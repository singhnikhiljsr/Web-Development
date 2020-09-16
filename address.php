<?php
$mysqli=mysqli_connect("localhost:3320","root","password","galwanvalley") or die("database error");

$getData = $_GET['term'];
$query = $ mysqli -> query("select address from payment where address like '%".$getData."%'");
while($row = $query -> fetch_assoc()){
	$data[] = $row ['address'];
}
 echo json_encode($data);
?>