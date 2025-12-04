<?php

// Made by alex1dev - https://alex1dev.xyz
// File config.php - Main configuration file

return [
    'debug' => true,
    
    'temp_dir' => __DIR__ . '/temp_repos',
    
    'providers' => [
        'https://github.com/%s.git',
    ],
    
    'ignore_extensions' => ['lock', 'log', 'tmp', 'bak', 'swp', 'git', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'woff', 'woff2', 'ttf', 'eot'],
    
    'ignore_dirs' => ['.git', 'node_modules', 'vendor', 'dist', 'build', 'coverage', '.idea', '.vscode'],
];
