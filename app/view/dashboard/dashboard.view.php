<?php

    // session_start();

?>

    <!-- Authentication or Authorization -->
    
    <div>
        <h1>Dashboard Task List</h1>
    </div>
    
    <div>
        <!-- if the checkbox is checked then display the text_message in the tasks_input and change the button to add to edit and if done then 
        return the new and updated text_messages and the updated one will be displayed in the text_section area. Use JQUERY FOR JAVASCRIPT IN THIS ONE? IF ITS OKAY? -->
        <input type="text" width="100" name="tasks_input" id="tasks_input" placeholder="Enter Task">
        <button type="submit">Add</button>
    </div>

    <div name="task_container">
        <div name="tasks_sections">
            <input type="checkbox" name="tasks_check" id="task_check">
            <div name="tasks_message"><h2>Tasks into Blaw blaw</h2></div>
            <div name="tasks_time"><p><i>Create at: time time</i></p></div>
            <div name="tasks_delete"><button type="submit">Delete</button></div>
        </div>
    </div>

    <div name="footer">
    footer
    </div>