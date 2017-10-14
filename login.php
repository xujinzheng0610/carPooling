<html>

<body>

    <?php
    
    
        session_start();
        $_SESSION['status'] = 0;
        $con = mysqli_connect("localhost", "root", "", "user_db");
        $username = $_POST["username"];
        $password = $_POST["password"];
    
    
        $q = "SELECT * from users where username = '$username' and password = '$password'";
        
        $result = mysqli_query($con, $q);
        $num = mysqli_num_rows($result);
        
        if ($num) {
            
            $_SESSION['status'] = 1;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            echo "<script>alert('login success');</script>";
            
            
            gosell();
            
        } else {
            
            echo "<script>alert('Unmatched username and password');</script>";
            goback();
            
        }
        
        // go back to Home page.
        function goback() {
            
            echo "
            <script>
               setTimeout(function() {
                   window.location.href = 'index.html';
               }, 500);
           </script>";
        }
    
    function gosell() {
            
            echo "
            <script>
               setTimeout(function() {
                   window.location.href = 'http://localhost/orbital%20project/sell/shop.php';
               }, 500);
           </script>";
        }
    ?>


</body>

</html>