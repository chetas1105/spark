<!-- connect php to webpage -->
<?php
//devlopment connection
//  $username ="root";
//  $password = "";
//  $server = "localhost";
//  $db = "sparkb";   
 
//remote database connection
 $username ="SCLoNaQiYb";
 $password = "3TZyOOlDp2";
 $server = "remotemysql.com";
 $db = "SCLoNaQiYb";  

 $con = mysqli_connect($server,$username,$password,$db);
 if($con){
    ?>
    <!-- <script>
        alert('Connect Successfully');
    </script> -->
    <?php

 }else{
     die("No connection due to" . mysqli_connect_error());
 }
?>