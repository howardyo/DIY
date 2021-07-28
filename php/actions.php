<?php
    require("init.php");

    $payload = @file_get_contents("php://input");
    $data = json_decode($payload); 

    switch ($data->action) {
        case 'Get Template':
            $get_Templates = get_Templates($data);
            print_r(json_decode($get_Templates));
            break;
        
        default:
            print_r("No Action!");
            break;
    }
?>