<?php

require 'system/Routing.php';

$url = key($_GET);

$r = new Routing();

$r->AddRout('/', 'main.php');
$r->AddRout('/about', 'about.php');
$r->AddRout('/contact', 'contact.php');

$r->Route('/' . $url);
