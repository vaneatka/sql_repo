<?php

    try
    {
    $dbh = new PDO('sqlite:database/db.sqlite', '', '');
    }
    catch (PDOException $e)
    {
        echo "Error connecting to database: " . $e->getMessage();
    }