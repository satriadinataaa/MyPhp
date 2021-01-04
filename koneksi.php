 <?php
            $username = "root";
            $password ="";
            $servername="localhost";
            $dbname="db_apotik";

            $conn = mysqli_connect($servername,$username,$password,$dbname);

            if(!$conn){
                echo mysqli_error($conn);
            }
        ?>