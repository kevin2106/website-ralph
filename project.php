<?php  

include('db.php');
$sql = "SELECT * FROM projects WHERE projectType = '".$value."'";
$result = mysqli_query($conn, $sql);


if($value == 'PF') {
        echo "<div class='row'>";

while ($row = mysqli_fetch_array($result)) {
        echo $result;
        echo "<div class='col-md-4'>";
        echo "<a href='#'>";
        echo "<img href='#' src='images/".$row['name']. ".png'/>";
        echo "</a>";
        echo "</div>";
} 
    echo "</div>";
} else {
            echo "<div class='row'>";
   while ($row = mysqli_fetch_array($result)) {

        echo "<div class='col-md-4'>";
        echo "<a href='#'>";
        echo "<img href='#' src='images/".$row['name']. ".png'/>";
        echo "</a>";
        echo "</div>";
} 
        echo "</div>";
}


    ?>