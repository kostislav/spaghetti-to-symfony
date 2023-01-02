<?php

include 'functions.php';

$title = 'My Awesome blog';
include 'header.php';

$recentPosts = mysqli_query(get_db_connection(), 'SELECT id, title, content, created FROM post ORDER BY created DESC LIMIT 5');

while ($post = mysqli_fetch_assoc($recentPosts)) {
    ?>
    <div class="post">
        <h2><a href="view_post.php?id=<?php echo $post['id']; ?>"><?php echo html_escape($post['title']); ?></a></h2>
        <p class="created">Created on <?php echo date('d.m.Y H:i', $post['created']) ?></p>
        <?php echo $post['content']; ?>
    </div>
    <?php
}

include 'footer.php';