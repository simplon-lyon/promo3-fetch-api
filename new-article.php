<?php
header('Content-Type: text/plain');

if (empty($_POST['title']) || empty($_POST['content'])) {
    http_response_code(400);
    echo 'missing required parameters';
    exit(1);
}
echo $_POST['title'] . ' ' . $_POST['content'];
exit(0);