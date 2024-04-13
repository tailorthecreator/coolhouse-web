<?php
require('functions.php');
require('routing.php');
require('Database.php');

$db = new Database();
$posts = $db->query("select * from contact_form")->fetch(PDO::FETCH_ASSOC);
