<?php

include '../functions.php';

function checkAccess() {
    session_start();
    if (!array_key_exists('id', $_SESSION) || $_SESSION['id'] == null) {
        show_login_form();
    }
}

function show_login_form($error = '') {
    ?>
    <html>
        <head>
            <title>Log in</title>
        </head>
        <body>
            <?php
            if ($error) {
                echo '<div style="color: red">', html_escape($error), '</div>';
            }
            ?>
            <form action="do_login.php" method="POST">
                <div>
                    <label>
                        Username: <input name="username"/>
                    </label>
                </div>
                <div>
                    <label>
                        Password: <input type="password" name="password"/>
                    </label>
                </div>
                <div>
                    <button type="submit">Log in</button>
                </div>
            </form>
        </body>
    </html>
<?php
    exit;
}