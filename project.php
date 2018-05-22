<?php  

include('db.php');
$sql = "SELECT * FROM projects WHERE projectType = '".$value."'";
$result = mysqli_query($conn, $sql);


if($value == 'PF') {
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='row'>";
        echo "<div class='col'>";
        echo "<img href='#' src='images/".$row['name']. ".png'/>";
        echo "<img href='#' src='images/".$row['name']. ".png'/>";
        echo "</div>";
    echo "</div>";
} } else {
            echo "<div class='row'>";
   while ($row = mysqli_fetch_array($result)) {

        echo "<div class='col'>";
        echo "<img href='#' src='images/".$row['name']. ".png'/>";
        echo "</div>";
        echo "<div class='col'>";
        echo "<img href='#' src='images/".$row['name']. ".png'/>";
        echo "</div>";
    echo "</div>";
} 
}


    ?>