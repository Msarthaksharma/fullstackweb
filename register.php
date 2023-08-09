<?php
//taken help from youtube
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sarthak_sharma8886667";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$teamName = $_POST["team_name"];
$collegeName = $_POST["college_name"];
$collegeAddress = $_POST["college_address"];
$collegeCity = $_POST["college_city"];
$collegeProvince = $_POST["college_province"];
$student1Name = $_POST["student1_name"];
$student1Email = $_POST["student1_email"];
$student2Name = $_POST["student2_name"];
$student2Email = $_POST["student2_email"];

$sql = "INSERT INTO sarthakdb(team_name, college_name, college_address, college_city, college_province, student1_name, student1_email, student2_name, student2_email) VALUES ('$teamName', '$collegeName', '$collegeAddress', '$collegeCity', '$collegeProvince', '$student1Name', '$student1Email', '$student2Name', '$student2Email')";

if ($conn->query($sql) === TRUE) {
    $registrationConfirmation = "Registration successful!";
} else {
    $registrationConfirmation = "Error: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Registration Confirmation</h1>
    </header>
    <main>
        <p><?php echo $registrationConfirmation; ?></p>
        <p>Team Name: <?php echo $teamName; ?></p>
        <p>College Name: <?php echo $collegeName; ?></p>
        <p>College Address: <?php echo $collegeAddress; ?></p>
        <p>College City: <?php echo $collegeCity; ?></p>
        <p>College Province: <?php echo $collegeProvince; ?></p>
        <p>Student 1 Name: <?php echo $student1Name; ?></p>
        <p>Student 1 Email: <?php echo $student1Email; ?></p>
        <p>Student 2 Name: <?php echo $student2Name; ?></p>
        <p>Student 2 Email: <?php echo $student2Email; ?></p>
    </main>
</body>
</html>
