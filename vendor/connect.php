<?php

    $connect = mysqli_connect('localhost', 'root', '', '1-database');

    if (!$connect) {
        die('Error connect to DataBase');
    }