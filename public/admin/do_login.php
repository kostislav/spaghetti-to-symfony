<?php

include 'functions.php';

$result = mysqli_query(get_db_connection(), 'SELECT id, password FROM user WHERE username = "' . db_escape($_POST['username']) . '"');
if (!$result) {
    show_login_form('Invalid username');
} else {
    $user = mysqli_fetch_assoc($result);
    if (!password_verify($_POST['password'], $user['password'])) {
        show_login_form('Wrong password');
    } else {
        session_start();
        $_SESSION['id'] = $user['id'];
        header('Location: /admin/index.php');
        http_response_code(303);
        session_write_close();
    }
}