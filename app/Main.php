<?php

namespace App;


use App\Db\User as User;

class Main
{
    public function take()
    {
        $users = new User;
        //$users = .\App\Db\User;

        var_dump($users);
    }
}


$afisam = new Main();
$a = $afisam->take();

var_dump($a);
