<html>

<header>
</header>

<body>

    // for sign up control.

    <?php
        
    //Connect to the database
    $con = mysqli_connect("localhost", "root", "", "user_db");
    
    
    
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    
    $q = "SELECT * from users where username = '$username'";
    $e = "SELECT * from users where email = '$email'";
    
    $user_result = mysqli_query($con, $q);
    $email_result = mysqli_query($con, $e);
    
    $email_num = mysqli_num_rows($email_result);
    $user_num = mysqli_num_rows($user_result);
    
    if ($user_num > 0) {
        // if the username already exists.
        echo "<script type = text/javascript>alert('Username already exists');</script>";
        goback();// more to be added
    } else if($email_num > 0) {
        // if the email is already registered.
        echo "<script type = text/javascript>alert('Email already exists');</script>";
        goback();
    } else {
        
        $rr = mysqli_query($con, "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')");
        
        mysqli_select_db($con, "cart");
        
        $q = "CREATE TABLE $username(
        
        id INT(6),
        quantity INT(3))";
        
        mysqli_query($con, $q);
        
    
        echo "<script type = text/javascript>alert('Register Success!');</script>";
    
        goback();
    }
    
    
    // go back to Home page.
    function goback() {
        
        echo "
        
           <script>
               setTimeout(function() {
                   window.location.href = 'index.html';
               }, 500);
           </script>
        
        ";
        
    }
    
    
    
    ?>


</body>



</html>
