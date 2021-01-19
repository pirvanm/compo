<?php
require_once __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
use App\Db\User;

$u = new User;

var_dump($u);

$data = Carbon::now();

var_dump($data);
$tomorrow = Carbon::now()->addDay();
$data = new Carbon;
