<?php

function get_db_connection() {
    static $connection = null;
    if ($connection == null) {
        $connection = mysqli_connect('localhost', 'spaghetti', 'pasta', 'spaghetti');
    }
    return $connection;
}

function db_escape($input) {
    return mysqli_escape_string(get_db_connection(), $input);
}

function html_escape($input) {
    return htmlspecialchars($input, ENT_QUOTES | ENT_SUBSTITUTE);
}