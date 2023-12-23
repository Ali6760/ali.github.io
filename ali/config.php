<?php

define("db_SERVER", "localhost");
define("db_USER", "root");

define("db_PASSWORD","");

define("db_DBNAME", "airline");

$con=mysqli_connect(db_SERVER, db_USER, db_PASSWORD, db_DBNAME);

if (!$con)
{
    die("failed");

}
else{
    echo" " . mysqli_connect_error();
}
?>