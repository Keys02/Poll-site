<?php
    /* Poll controller  */
    include_once "models/Poll.php";
    include_once "models/database.php";

    $poll = new Poll($database);
    $poll_data = $poll->getPollData();

    include_once "views/poll-template.php";
?>