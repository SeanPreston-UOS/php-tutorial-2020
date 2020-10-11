<?php

$db_config = [
    "db_host" => "localhost",
    "db_name" => "phptutorial",
    "db_user" => "phptutorial",
    "db_pass" => "uiMwsL7wcXB6"
];

$Conn = new PDO("mysql:host=".$db_config['db_host'].";dbname=".$db_config['db_name'], $db_config['db_user'], $db_config['db_pass']);
