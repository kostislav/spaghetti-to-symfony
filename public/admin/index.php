<?php

include 'functions.php';

checkAccess();

$title = 'Admin section - My Awesome blog';
include '../header.php';

echo '<p><a href="new_post.php" class="btn btn-primary">New post</a></p>';

$posts = mysqli_query(get_db_connection(), 'SELECT id, title FROM post ORDER BY created DESC');

echo '<table class="table table-striped table-bordered"><thead><tr><th>Title</th><th>Delete</th></tr></thead><tbody>';

while ($post = mysqli_fetch_assoc($posts)) {
    ?>
    <tr>
        <td><a href="edit_post.php?id=<?php echo $post['id']; ?>"><?php echo html_escape($post['title']); ?></a></td>
        <td>
            <form action="delete_post.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>"/>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php
}

echo '</tbody></table>';

include '../footer.php';