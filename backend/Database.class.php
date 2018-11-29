<?php

// $db = new database
// $db->connect();

class database {

    private $db;

    function connect($host, $username, $passwd, $dbname, $port) {
        $db = new mysqli($host, $username, $passwd, $dbname, $port);
        if ($db->connect_errno > 0) {
            return $db->connect_error;
        } else
            return true;
    }

}
