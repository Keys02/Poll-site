<?php
    /* Poll controller  */
    include_once "models/Poll.php";

    $poll = new Poll();
    $poll_data = $poll->getPollData();

    include_once "views/poll-template.php";
?>