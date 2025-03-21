<?php
    /* Front controller */
    require_once "models/PageData.php";

    $page = new PageData("PHP/MySQL site poll", "<link rel='stylesheet' href='css/style.css'");

    require_once "controllers/poll.php";

    require_once "views/page.php";

    echo $poll_template;
    echo $page;
?>