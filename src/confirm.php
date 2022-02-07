<?php
session_start();
$servername = "db";
$username = "root";
$password = "example";
$dbname = "wps";
$first_name = $_SESSION["f_name"];
$last_name = $_SESSION["l_name"];
$last_id = $_SESSION['l_id'];
?>

<html>
    <head>
        <title>Print This Page</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
    <button onClick="window.print()">Print this page</button>
    <br>
    </body>
</html>

<?php
//$first_name = "Brett";
//$last_name = "Krumholz";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//$new_id = $_COOKIE[$last_id]
//$sql = "SELECT * FROM intake WHERE `first_name`='$first_name' AND `last_name`='$last_name'";
$sql = "SELECT * FROM intake WHERE `id`='$last_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. "<br>";
    echo " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    echo " - Phone Number: " . $row["phone_num"]. "<br>";
    echo " - Email: " . $row["email"]. "<br>";
    echo " - Device Type: " . $row["dev_type"]. "<br>";
    echo " - Serial Number: " . $row["sn"]. "<br>";
    echo " - Issues: " . $row["issue"]. "<br>";
    echo " - Accessories: ";
    echo "<p>" . $row["acc_power"]. "</p>";
    echo "<p>" . $row["acc_mouse"]. "</p>";
    echo "<p>" . $row["acc_keyboard"]. "</p>";
    echo "<p>" . $row["acc_hdd"]. "</p>"; 
    echo "<p>" . $row["perm1"]. "</p>";
    echo "<p>" . $row["perm2"]. "</p>";

  }
} else {
  echo "0 results";
}
$conn->close();
?>