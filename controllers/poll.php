<?php
    /* Poll controller: Will be worked out at the front controller */
    include_once "models/Poll.php";

    $poll = new Poll($database);

    $poll_data = $poll->getPollData();
    
    include_once "views/poll-template.php";
?>