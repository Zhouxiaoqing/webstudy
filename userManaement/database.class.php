<?php

class DB {
	private $mysqli = null;

	private $url = "127.0.0.1";
	private $db_user = "root";
	private $db_password = "";
	private $db = "test";

	public __construct() {
        $mysqli = new mysqli($url, $db_user, $db_password, $db);
        if ($mysqli->errno)
            return $mysqli->errno . ':' . $mysqli->error;
            // {重要}一定要设置字符集，否则mysql那边没设置，可能导致乱码！！！
        $mysqli->set_charset('utf8');
        $this->mysqli = $mysqli;
    }

	public insert() {

	}

	public delete() {

	}

	public update() {

	}

	public select() {

	}

    public __destruct() {
        $this->mysqli->close();
        $this->mysqli = null;
    }
}

?>




?>