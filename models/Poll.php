<?php
    /*
        Model: To be hooked to the poll controller and render on the front controller
    */
    class Poll {
        private string $poll_question = "";
        private int $yes = 0;
        private int $no = 0;
        private $database = "";

        public function __construct(object $db_connection_string) {
            $this->database = $db_connection_string;
        }

        public function getPollData() : object {
            return $this;
        }

        public function getPollQuestion(): string {
            return $this->poll_question;
        }

        public function getYes() : int {
            return $this->yes;
        }

        public function getNo() : int {
            return $this->no;
        }
    }
?>