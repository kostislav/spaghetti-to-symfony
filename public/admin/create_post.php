<?php

include 'functions.php';

checkAccess();

$title = 'Create post - Admin section - My Awesome blog';
include '../header.php';

mysqli_query(
    get_db_connection(),
    'INSERT INTO post(title, content, created) VALUES ("' . db_escape($_POST['title']) . '", "' . db_escape($_POST['content']) . '", ' . time() . ')'
);

?>
<h1>Post created</h1>
<a href="index.php">Back to administration</a>

<?php

include '../footer.php';