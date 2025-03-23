<?php
/*
    Partial: Will be included in other views before they are rendered, not directly rendered.
*/
    $header = "
        <!DOCTYPE html>
        <html land='en-US'>
            <head>
                <meta charset='UTF-8'>
                <meta name='description' content='Use this site to organize a poll'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0 shrink-to-fit=no'>
                <title>{$page->getTitle()}</title>
                {$page->getStylesheet()}
            </head>
            <body>
    "
?>