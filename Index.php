<?php

require 'Functions.php';

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/') {
    require 'Controllers/index.php';
} elseif($uri === '/about') {
    require 'Controllers/about.php';
} elseif($uri === '/contact') {
    require 'Controllers/contact.php';
} 