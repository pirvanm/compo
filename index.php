<?php
require_once __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$data = Carbon::now();

var_dump($data);
$tomorrow = Carbon::now()->addDay();
$data = new Carbon;
