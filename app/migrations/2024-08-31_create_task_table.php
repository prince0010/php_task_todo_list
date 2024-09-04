<?php


function createTaskTable($pdo)
{

     // Check if table exists
     $checkTable = $pdo->query("SHOW TABLES LIKE 'tasks'")->fetchColumn();

     if ($checkTable) {
         return; // Table exists, so exit the function silently
     }

    $sql = "CREATE TABLE IF NOT EXISTS tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        task_data VARCHAR(255) NOT NULL,
        status ENUM('Not-Completed', 'Completed') DEFAULT 'Not-Completed',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        user_id INT NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(id)
        )";

        try{
            $pdo->exec($sql);
            echo "Task Table Created Successfully. ";
        }
        catch(Exception $e)
        {
            echo "Error: ". $e->getMessage();
        }
}