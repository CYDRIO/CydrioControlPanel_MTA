<?php

// $db = new database
// $db->connect();

class database {

    private $db;

    /* @var $this->db mysqli */

    public function connect(string $host, string $username, string $passwd, string $dbname, int $port) {
        $this->db = new mysqli($host, $username, $passwd, $dbname, $port);
        if ($this->db->errno > 0) {
            return $db->connect_error;
        } else
            return true;
    }

    public function close() {
        if ($this->db->errno > 0) {
            $this->db->close();
            return true;
        } else {
            return false;
        }
    }

}
