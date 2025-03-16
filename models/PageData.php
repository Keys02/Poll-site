<?php
    class PageData {
        private string $title = "";
        private string $css = "";
        private string $nav = "";
        private string $content = "";

        function __construct(string $title = "", string $css = "") {
            $this->title = $title;
            $this->css = $css;
        }
        
        /**********************
         *      Getters
         **********************/
        public function getTitle(): string {
            return $this->title;
        }

        public function getStylesheet(): string {
            return $this->css;
        }

        public function getNav(): string {
            return $this->nav;
        }

        public function getContent(): string {
            return $this->content;
        }
        
        /**********************
         *      Setters
         **********************/
        public function setStylesheet(string $value) {
            if(strpos($value, '<')) {
                $this->css = $value;
            }
        }

        public function appendContent(string $value) {
            $this->content .= $value;
        }

        public function setContent(string $value) {
            $this->content = $value;
        }

        public function setTitle(string $value){
            $this->title = $value;
        }

        public function setNav(string $value) {
            $this->nav = $value;
        }


    }

?>