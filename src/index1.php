<?php

$servername = "localhost";
$database = "database";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo “Connected successfully”;

mysqli_close($conn);

?>

 // qus no 4

<?php

   session_start();

   if( isset( $_SESSION['counter'] ) ) {

      $_SESSION['counter'] += 1;

   }else {

      $_SESSION['counter'] = 1;

   }

   $my_Msg = "This page is visited ".  $_SESSION['counter'];

   $my_Msg .= " time during this session.";

?>



//qus 3

$sql = "SELECT * from building";

if ($result = mysqli_query($con, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf("Total rows in this table :  %d\n", $rowcount);
 }
