<?php
open_database_connection();
    "mysql:INSERT INTO subjects (title_name, author_name, content)
    VALUES (title, author, content);"
close_database_connection($link);
?>