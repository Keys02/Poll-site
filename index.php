<?php
    /* Front controller */
    require_once "models/PageData.php";
    include_once "models/database.php";

    $page = new PageData("PHP/MySQL site poll", "<link rel='stylesheet' href='css/style.css'");

    require_once "controllers/poll.php";

    
    $page->setContent($poll_template);
    
    require_once "views/page.php";
    echo $webpage;
?>