<?php

    $host = 'localhost';
    $dbname = 'mvc_app';
    $user = 'root';
    $pass = '';

    try{

        // CREATE A NEW PDO INSTANCE
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Database connection established.<br>";

        // Include the Migration Files
        include '2024_08_31_create_user_table.php';
        include '2024-08-31_create_task_table.php';

        echo "Starting migrations: <br>";

        // Execute the Migration functions
        echo "Running user table migration...<br>";
        createUserTable($pdo);
        echo "<br>";

        echo "Running task table migration...<br>";
        createTaskTable($pdo);
        echo "<br>";

        echo "All migrations executed successfully!<br>";
    }
    catch(Exception $e)
    {
        echo "Error: ". $e->getMessage();
    }

