<html>


<body>

    <?php
        
        $cd = $_GET['cmd'];
    
    
    
        $slc = $_POST["select"];
        echo $slc;
    
        
        if ($cd == 1) {
            // sort by price, incre
            
            $con = mysqli_connect("localhost", "root", "", "items");
            
            $q = "SELECT * from 'products' order by id ASC";
            
            $result = mysqli_query($con, $q);
            
            
        } else if ($cd == 2) {
            
            
            
        }
        
        
        
        ?>




        <script>
            history.back();

        </script>
</body>

</html>
