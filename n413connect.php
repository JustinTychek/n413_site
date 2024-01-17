<?php
        $dbhost = 'localhost'; //XAMPP is 'localhost:3306'
        $dbuser = 'jmtychek';
        $dbpwd  = 'transitional tiptoe tutor bridle'; //XAMPP password is ''
        $dbname = 'jmtychek_db';
        $link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
        if (!$link) { die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error()); }
    ?>

<!--    $dbhost = 'localhost'; //XAMPP is 'localhost:3306'
        $dbuser = 'root';
        $dbpwd  = 'root'; //XAMPP password is ''
        $dbname = 'ampjam_db'; -->