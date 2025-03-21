<?php
    /*
        View: To be rendered in the front controller
    */
    $poll_template = "
        <aside id='poll'>
            <form method='post' action='index.php'>
                <fieldset>
                    <legend><span class='poll-quest'><b>Question:</b> $poll_data->poll_question</span></legend>
                    <ul>
                        <li>
                            <select name='user-opinion'>
                                <option value='yes'>Yes, it is!</option>
                                <option value='no'>No, not really!</option>
                            </select>
                        </li>
                        <input type='submit' value='post'>
                    </ul>
                </fieldset>
            </form>
            <h1>Poll results</h1>
            <ul>
                <li>{$poll_data->yes} said yes</li>
                <li>{$poll_data->no} said no</li>
            </ul>
        <aside>
    "
?>