<?php
    /* Poll controller: Will be worked out at the front controller */
    include_once "models/Poll.php";

    $poll = new Poll($database);
    
    $poll_data = $poll->getPollData();

    include_once "views/poll-template.php";
    
    if(isset($_POST['user-opinion']) && isset($_POST['submit-answer'])) {
        $input = $_POST['user-opinion'];
        $poll->updatePoll($input);
        $poll_data = $poll->getPollData();
        include_once "views/poll-results.php";
    }
?>