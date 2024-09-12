<?php
 
function main(array $args) : array
{
    $name = $args["name"] ?? "stranger";
    
    $greeting = "Hello {$name}! Current time is " . date('Y-m-d H:i:s');
    echo $greeting;

   error_log($greeting, 0); // 0 sends the output to stdout

   try {
   error_log($greeting, 0); // 0 sends the output to stdout
 echo "mid point";
    
   error_log("This is a message", 3, 'php://stdout');

    
 
    return [
        'body' => $greeting,
     'time' => date('Y-m-d H:i:s'),
    ];
   } catch (\Exception $e) {
 return [
  'error' => $e->getMessage(),
    ];
   }
}
