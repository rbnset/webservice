<?php
    $data = file_get_contents('https://jsonplaceholder.typicode.com/posts');
    header('Content-Type: application/json');
    echo $data;
