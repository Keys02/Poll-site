<?php
    /*
        View: To be rendered in the front controller
    */
    $data_found = isset($poll_data);
    if(!$data_found) {
        trigger_error('No data created when');
    }

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
                        <input type='submit' name='submit-answer' value='Answer'>
                    </ul>
                </fieldset>
            </form>
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