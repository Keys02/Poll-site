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
    }
?>