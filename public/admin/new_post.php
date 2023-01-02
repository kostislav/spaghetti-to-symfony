<?php

include 'functions.php';

checkAccess();

$title = 'New post - Admin section - My Awesome blog';
include '../header.php';

?>
<form action="create_post.php" method="POST">
    <div>
        <label class="form-label">
            Title: <input name="title" class="form-control"/>
        </label>
    </div>
    <textarea name="content" rows="20" cols="80" class="form-control"></textarea>
    <div>
        <button type="submit" class="btn btn-primary">Create post</button>
    </div>
</form>

<?php

include '../footer.php';