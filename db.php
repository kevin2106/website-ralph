<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ralphouse.com";

$i = $_REQUEST["i"];

//echo $i;

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

mysqli_select_db($conn, "ralphouse.com");
$sql = "SELECT * FROM projects WHERE projectType = '".$i."'";
$result = mysqli_query($conn, $sql);

    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "</tr>";
while ($row = mysqli_fetch_array($result)) {
    echo $row['name'];
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "</tr>";

    //echo "<span>" . $row['name'] . "</span>";
}
    echo "</table>";

mysqli_close($conn);
?>