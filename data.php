<?php

    $id = $_GET['id'];
    
    $servername = "127.0.0.1";
    $username = "paidrqdf_andrei";
    $password = "sU-8!M!&{OT;";
    $dbname = "paidrqdf_email_veri";

    $db = mysqli_connect($servername, $username, $password, $dbname);
    
    $query = "UPDATE pas1 SET email_check = '1' WHERE id='$id'";
    $query = mysqli_query($db, $query);
    
  echo"Email verificatoin success";