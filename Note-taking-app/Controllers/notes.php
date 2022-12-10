<?php 

$config = require "config.php";
$db = new Database($config);


$heading = 'My Notes'; 

$notes = [];

$notes = $db->query('SELECT * FROM notes') -> findAll();



require "views/notes.view.php"; ?>
