<?php

require('app/app.php');

$json = get_data();

$terms = json_decode($json);

//$view_bag = [];

//$view_bag['title'] = 'This is the new title';

view('index', $terms);
