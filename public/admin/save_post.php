<?php

include 'functions.php';

checkAccess();

$title = 'Save post - Admin section - My Awesome blog';
include '../header.php';

mysqli_query(
    get_db_connection(),
    'UPDATE post SET title = "' . db_escape($_POST['title']) . '", content = "' . db_escape($_POST['content']) . '" WHERE id =  ' . db_escape($_POST['id'])
);

?>
    <h1>Post updated</h1>
    <a href="index.php">Back to administration</a>

<?php

include '../footer.php';