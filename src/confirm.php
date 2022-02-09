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
 /*   echo "<table id=customers>";
    echo "<tr>";
    echo "<td>id: </td><td>" . $row["id"]. "</td>";
    echo "</tr>";
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
    echo "</table>";
*/
    $newid = $row["id"];
    $fname = $row["first_name"];
    $lname = $row["last_name"];
    $phonenum = $row["phone_num"];
    $email = $row["email"];
    $status = $row["status"];
    $devtype = $row["dev_type"];
    $serial = $row["sn"];
    $issue = $row["issue"];
    $power = $row["acc_power"];
    $mouse = $row["acc_mouse"];
    $keyboard = $row["acc_keyboard"];
    $hdd = $row["acc_hdd"];
    $perm1 = $row["perm1"];
    $perm2 = $row["perm2"];

  }
} else {
  echo "0 results";
}
$conn->close();
?>

<html>
    <head>
        <title>Print This Page</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
    <button onClick="window.print()">Print this page</button>
    <button onClick="location.href='index.php'" type="button">Home</button>
    <br>
<table id="customer">
    <tr>
        <td>ID: </td>
        <td><?php echo $newid; ?></td>
    </tr>
    <tr>
        <td>Name: </td>
        <td><?php echo "$fname $lname"; ?></td>
    </tr>
    <tr>
        <td>Phone: </td>
        <td><?php echo $phonenum; ?></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td>Status: </td>
        <td><?php echo $status; ?></td>
    </tr>
    <tr>
        <td>Device Type: </td>
        <td><?php echo $devtype; ?></td>
    </tr>    <tr>
        <td>Serial Number: </td>
        <td><?php echo $serial; ?></td>
    </tr>
    <tr>
        <td>Issue: </td>
        <td><?php echo $issue; ?></td>
    </tr>
    <tr>
        <td>Accessories: </td>
        <td><?php echo $power; ?></td>
        <td><?php echo $mouse; ?></td>
        <td><?php echo $keyboard; ?></td>
        <td><?php echo $hdd; ?></td>
    </tr>
    <tr>
        <td>Perm1: </td>
        <td><?php echo $perm1; ?></td>
    </tr>
    <tr>
        <td>Perm2: </td>
        <td><?php echo $perm2; ?></td>
    </tr>
</body>
</html>