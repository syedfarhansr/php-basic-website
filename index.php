<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$db = new Database();
$post = $db->query("select * from post")->fetchAll(PDO::FETCH_ASSOC);

dd($post);