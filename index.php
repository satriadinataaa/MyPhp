<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include('koneksi.php')?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <table border="1">
            <tr>
                <td>Nama Pegawai</td>
                <td>Username</td>
            </tr>
            <?php 
                   $query = "SELECT * FROM users";
                   $data = mysqli_query($conn,$query);
                   if($data->num_rows >0){
                       while($row = $data->fetch_array()){?>
            <tr>
                <td><?= $row['nama'] ?> </td>
                <td><?= $row['username'] ?> </td>
            </tr>
                      <?php }
                   }
                 
            ?>
            
        </table>
        
        <form action="target.php" method="get">
            <input type="text" name="username" placeholder="Username"/>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
