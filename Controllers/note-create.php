<?php


$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Create Note';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    if(!$_POST['title']){
        $errors[] = 'A title is required';
    }else if(!$_POST['body']){
        $errors[] = 'A body is required';
    }

    if(empty($errors)){
        $db->query('INSERT INTO notes (title, body, user_id) VALUES (:title, :body, :user_id)', [
            'title' => $_POST['title'],
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
require 'views/note-create.view.php';