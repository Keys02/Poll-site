<?php
/*
    View: To be rendered in the front controller
*/

    require_once "partials/_header.php";
     
    $main_content =  "
            <section id='container'>
                <header>{$page->getNav()}</header>
                <main>{$page->getContent()}</main>
            </section>
    ";
    require_once "partials/_footer.php";

    $page = $header . $main_content . $footer

?>