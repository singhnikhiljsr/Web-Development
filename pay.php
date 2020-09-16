<?php
$servername = "localhost:3320";
$username = "root";
$password = "";
$dbname = "galwanvalley";
$id=1;
$name=$_POST["name"];
$email=$_POST["email"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$code=$_POST["code"];
$cardname=$_POST["cardname"];
$ccnumber=$_POST["ccnumber"];
$emonth=$_POST["emonth"];
$eyear=$_POST["eyear"];
$cvv=$_POST["cvv"];
// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}

$sql = "INSERT INTO payment
VALUES (NULL, '$name','$email','$address','$city','$state',$code,'$cardname',$ccnumber,$emonth,$eyear,$cvv)";

if ($conn2->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn2->error;
}
$sql = "SELECT * FROM payment";
$result = $conn2->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]."email: " . $row["email"]." "."address: " . $row["address"]." "."city: " . $row["city"]." ". "state: " . $row["state"]." "."code: " . $row["code"]." "."cardname: " . $row["cardname"]." "."card number: " . $row["ccnumber"]." "."expiry month: " . $row["emonth"]." "."exp year: " . $row["eyear"]." "."cvv: " . $row["cvv"]." "."<br>";
    }
} else {
    echo "0 results";
}
$conn2->close();
?>
