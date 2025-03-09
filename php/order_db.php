<?php
    $server_name = 'MySql-5.7';
    $user_name = 'root';
    $password = '';
    $db_name = 'GasPrime_db';

    $connection = mysqli_connect($server_name, $user_name, $password, $db_name);

    if (!$connection)
    {
        die(mysqli_connect_error());
    }
?>