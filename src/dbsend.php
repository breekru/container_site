<?php
session_start();
$servername = "db";
$username = "root";
$password = "example";
$dbname = "wps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];

$_SESSION["f_name"] = $fname;
$_SESSION["l_name"] = $lname;

$ph = $_POST['phone_num'];
$em = $_POST['email'];
$status = $_POST['status'];
$device = $_POST['dev_type'];
$serial = $_POST['sn'];
$iss = $_POST['issue'];
$power = $_POST['acc_power'];
$mouse = $_POST['acc_mouse'];
$keyboard = $_POST['acc_keyboard'];
$hdd = $_POST['acc_hdd'];
$permission1 = $_POST['perm1'];
$permission2 = $_POST['perm2'];


$sql = "INSERT INTO intake (first_name, last_name, phone_num, email, status, dev_type, sn, issue, acc_power, acc_mouse, acc_keyboard, acc_hdd, perm1, perm2) VALUES ('$fname', '$lname', '$ph', '$em', '$status', '$device', '$serial', '$iss', '$power', '$mouse', '$keyboard', '$hdd', '$permission1', '$permission2')";



if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Customer ID is: " . $last_id;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

$_SESSION["l_id"] = $last_id;
?>

<html>
    <head>
        <title>Intake Created</title>
        <meta http-equiv="Refresh" content="2; url='http://localhost/confirm.php'" />
    </head>
<body>

</body>
</html>





