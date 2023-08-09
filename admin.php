<?php

$conn = "";

try {
	$servername = "localhost:3306";
	$dbname = "sarthak_sharma8886667";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=sarthak_sharma8886667",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
<?php

include_once('index.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $conn->prepare("SELECT * FROM userlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['username'] == $username) &&
			($user['password'] == $password)) {
				header("location: index.php");
		}
		else {
			echo "<script language='l'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
	}
}

?>
