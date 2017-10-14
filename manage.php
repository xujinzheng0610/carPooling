<html>


<?php
    
    $con = mysqli_connect("localhost", "root", "","user_db");
    
    $q = "CREATE TABLE cart(
    
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    item VARCHAR(20) NOT NULL,
    price INT(8),
    quantity INT(3)
    )";
    
    mysqli_select_db($con, "user_db");
    mysqli_query($con, $q);
    ?>


</html>
