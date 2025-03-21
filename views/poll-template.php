<?php
    /*
        View: To be rendered in the front controller
    */
    $poll_template = "
        <aside id='poll'>
            <h1>Poll results</h1>
            <ul>
                <li>{$poll_data->getYes()} said yes</li>
                <li>{$poll_data->getNo()} said no</li>
            </ul>
        <aside>
    "
?>