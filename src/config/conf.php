<?php

    class config{

        public $dns;
        public $dbUser;
        public $dbPass;

        function __construct(){
            $this->dns = "mysql:host=localhost;dbname=phoneshop_db";
            $this->dbUser = "root";
            $this->dbPass = "";
        }


    }




?>