<?php
    /* Front controller */
    require_once "models/PageData.php";

    $page = new PageData('PHP/MySQL site poll', "<link rel='stylesheet' href='css/style.css'");

    $page->setContent("<h1>Everything works so far!</h1>");

    $page->appendContent("<div>..and content goes here.</div>");

    require_once "views/poll-page.php";

    echo $page;
?>