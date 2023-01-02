<?php

include 'functions.php';

checkAccess();

$title = 'Delete post - Admin section - My Awesome blog';
include '../header.php';

mysqli_query(
    get_db_connection(),
    'DELETE FROM post WHERE id = ' . db_escape($_POST['id'])
);

?>
    <h1>Post deleted</h1>
    <a href="index.php">Back to administration</a>

<?php

include '../footer.php';