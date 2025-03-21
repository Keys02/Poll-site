<?php
    /*
        View: To be rendered in the front controller
    */
    $poll_template = "
            <div class='poll-result'>
                <h2 class='poll-result-heading'>Poll results</h2>
                <ul>
                    <li>{$poll_data->yes} said <span class='yes'>yes</span></li>
                    <li>{$poll_data->no} said <span class='no'>no</span></li>
                </ul>
            </div>
        <aside>
    "
?>