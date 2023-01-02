<?php

include 'functions.php';

$result = mysqli_query(get_db_connection(), 'SELECT title, content FROM post WHERE id = ' . db_escape($_GET['id']));

if ($result) {
    $post = mysqli_fetch_assoc($result);
    $title = $post['title'] .  ' - My Awesome blog';
    include 'header.php';

    echo '<p class="created">Created on ', date('d.m.Y H:i', $post['created']), '</p><p><a href="index.php">Go back</a></p>';

    echo $post['content'];
} else {
    http_response_code(404);
    $title = '404 Not Found - My Awesome blog';
    include 'header.php';

    echo '<p>Page not found</p>';
}

include 'footer.php.php';


