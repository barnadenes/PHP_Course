<?php

require('OOP_php/inc/functions.php');

$title = "Hello dude";

$view_bag = [];

$view_bag['title'] = 'This is the new title';

view('index', $title);
