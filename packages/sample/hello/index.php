<?php
 
function main(array $args) : array
{
    $name = $args["name"] ?? "stranger";
    
    $greeting = "Hello {$name}!";
    echo $greeting;

   error_log($greeting);
 
    return [
        'body' => $greeting,
    ];
}
