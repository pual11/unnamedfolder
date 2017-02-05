




 <?php
//$servername = "localhost";
//$username = "root";
//$password = "root";
//
// Create connection
//$conn = new mysql_query($servername, $username, $password);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
  
//$select =  mysqli_select_db("videos") ;

//if(!$select){
//  die("kanker weer fout <br>" . mysqli_error());
//}

//echo "Connected successfully <br>";
//$result = mysql_query("SELECT `vids`.`id`, `vids`.`name`, `vids`.`link`FROM vids");
//if (!$result) {
//    echo 'Could not run query: ' . mysqli_error();
//    exit;
//}
//$row = mysqli_fetch_row($result);

//echo $row[0]; // 42
//echo $row[1]; // the email value
?>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "videos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, link FROM vids";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["link"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>