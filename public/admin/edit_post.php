<?php

include 'functions.php';

checkAccess();

$title = 'Edit post - Admin section - My Awesome blog';
include '../header.php';

$result = mysqli_query(get_db_connection(), 'SELECT title, content FROM post WHERE id = ' . db_escape($_GET['id']));
$post = mysqli_fetch_assoc($result);

?>
    <form action="save_post.php" method="POST">
        <input type="hidden" name="id" value="<?php echo html_escape($_GET['id']); ?>"/>
        <div>
            <label class="form-label">
                Title: <input name="title" value="<?php echo html_escape($post['title']); ?>" class="form-control"/>
            </label>
        </div>
        <textarea name="content" rows="20" cols="80" class="form-control"><?php echo $post['content']; ?></textarea>
        <div>
            <button type="submit" class="btn btn-primary">Save post</button>
        </div>
    </form>

<?php

include '../footer.php';