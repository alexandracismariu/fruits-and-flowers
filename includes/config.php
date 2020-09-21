<?php 
    $mysql = new mysqli("localhost", "dev", "dev", "alexandra");

    // check connection
    if (mysqli_connect_error()) 
    {
        printf("Connect faild: " . mysqli_connect_error());
        exit();
    }

    $nume_site = "Fruits Title!";

