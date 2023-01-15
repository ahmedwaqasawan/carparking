<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     
 ?><?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
<!DOCTYPE html>
<html>
     <head>
          <title>HOME</title>
          <link rel="stylesheet" href="global.css">
          <script src="https://cdn.tailwindcss.com"></script>
     </head>
     <body>
          <a class="log_out" href="logout.php">Logout</a>
     <br><br><br><br>          
        <?php
        $con=  mysqli_connect("localhost", "root", "","test_db");

        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * FROM detail");
// <!-- signup is the table in the detail_Database -->
       ?>
        <div>
            <td class='loginText'><h2>Login Page Database</h2></td>
         <table border="1">
                    <th>Sr. No</th>
                    <th>Car No</th>
                     <th>Date</th>
                    <th>Time</th>
            </tr>

        <?php

             while($row=  mysqli_fetch_array($con))
             {
              
                 ?>
            <tr>
                <td><?php echo $row['Sr. No']; ?></td>
                <td><?php echo $row['Car No']; ?></td>
                <td><?php echo $row['Date']; ?></td>
                <td><?php echo $row['Time'] ;?></td>
                
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
    </body>
</html>

