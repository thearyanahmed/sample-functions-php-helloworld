<?php
 
function main(array $args) : array
{
    $name = $args["name"] ?? "stranger";
    
    $greeting = "Hello {$name}!";
    echo $greeting;

   error_log($greeting, 0); // 0 sends the output to stdout
 
    return [
        'body' => $greeting,
    ];
}
