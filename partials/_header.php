<?php
    $header = 
    "
        <!DOCTYPE html>
        <html land='en-US'>
            <head>
                <meta charset='UTF-8'>
                <meta name='description' content='Dynamic image gallery'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>{$page->getTitle()}</title>
                {$page->getStylesheet()}
            </head>
            <body>
                <header>{$page->getNav()}</header>
                <main>{$page->getContent()}</main>
    "
?>