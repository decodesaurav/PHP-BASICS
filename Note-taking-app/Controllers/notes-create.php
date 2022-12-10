<?php
$config = require "config.php";
$db = new Database($config);
$heading = "Create Note";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];

    if (strlen($_POST['body']) === 0){
        $errors['body'] = "A body is required";
    }
    if (strlen($_POST['body']) > 500){
        $errors['body'] = "The body can't be above 500 characters";
    }

    if (empty($errors)){
        $db->query('INSERT INTO notes(user_id, body) VALUES (:user_id, :body)',[
            'user_id' => 2,
            'body' => $_POST['body']
        ]);
    }
}



require 'views/note-create-view.php';


?>