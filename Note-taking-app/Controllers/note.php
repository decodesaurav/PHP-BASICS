<?php 

$config = require "config.php";
$db = new Database($config);


$heading = 'Note'; 
$currentUserId = 2;


$note = $db->query('SELECT * FROM notes where id = :id', [':id' => $_GET['id']]) -> findAndFail();

authorize($note['user_id'] === $currentUserId);


require "views/note.view.php";
?>
