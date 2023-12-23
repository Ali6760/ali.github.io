<?php
include 'config.php';
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
 <tr><th>ID</th><th>price</th></tr>
 </tr>
</table>
    <?php
    
    $sql = "SELECT * FROM flight;";
    $result = mysqli_query($con, $sql);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
       
        
        while($row = mysqli_fetch_array($result)){
         echo $row['flightID'] . "<br>"; 
         
            

        }
        
    }
    
    
    ?>
</body>

</html>
