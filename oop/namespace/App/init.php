<?php

spl_autoload_register(function ($class) {
    $class = str_replace('App\\', '', $class); // buang prefix 'App\'
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// spl_autoload_register(function( $class ) { 
//     $class = replace('\\','/', $class);
//     require_once __DIR__ . '/' . $class . '.php';
// });