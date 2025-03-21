<?php
    /*
        Model: To be hooked to the poll controller and render on the front controller
    */
    class Poll {
        private $database;

        public function __construct(object $db_connection) {
            $this->database = $db_connection;
        }

        public function getPollData() : object {
            $sql_query = "SELECT poll_question, yes, no FROM poll WHERE poll_id = 1";
            $statement = $this->database->prepare($sql_query);
            $statement->execute();
            $poll_data = $statement->fetchObject();
            return $poll_data;
        }

        public function updatePoll($input) {
            if($input === "yes") {
                $sql_update_query = "UPDATE poll SET yes = yes + 1 WHERE poll_id = 1";
            } else if($input === "no") {
                $sql_update_query = "UPDATE poll SET no = no + 1 WHERE poll_id = 1";
            }
            $update_database = $this->database->prepare($sql_update_query);
            $update_database->execute();
        }
    }
?>