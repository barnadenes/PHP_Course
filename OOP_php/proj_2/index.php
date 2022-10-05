<?php

require('app/app.php');

$data = get_data();

//$view_bag = [];

//$view_bag['title'] = 'This is the new title';

view('index', $data);
