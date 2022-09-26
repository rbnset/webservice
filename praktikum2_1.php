<?php 
    $data = file_get_contents('https://my-json-server.typicode.com/aazmuhammadnoor/webservice/employees');
    header('Content-Type: application/json');
    echo $data;
