<?php

include 'config.php';
if ($con){

$sql = "DROP DATABASE LIU20232024";

If ($QueryResult)

{
    $QueryResult = mysqli_query($con, $sql); mysqli_close($con);

echo '<script type="text/javascript"> alert("Database succefully created "); 
window.location.href="index.php"; </script>';}

else

echo '<script type="text/javascript"> 
alert("Database is already found ");
 window.location.href="index.php"; </script>';
}
 ?>