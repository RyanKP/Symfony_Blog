<?php
function get_post_by_id($id)
{
    $link = open_database_connection();
    $id = intval($id);
    $result = $link->query('SELECT created_at, title_name, content FROM posts WHERE id = '.$id);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    close_database_connection($link);

    return $row;
}
function open_database_connection()
{
$link = new PDO("mysql:host=localhost;dbname=blog", 'admin', 'password');

return $link;
}

function close_database_connection(&$link)
{
$link = null;
}

function get_all_posts()
{
$link = open_database_connection();

$result = $link->query('SELECT id, title_name FROM posts');

$posts = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
$posts[] = $row;
}
close_database_connection($link);

return $posts;
}
?>