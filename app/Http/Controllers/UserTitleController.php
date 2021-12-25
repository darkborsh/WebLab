<?php

namespace App\Http\Controllers;

use App\Models\UserTitle;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;;

class UserTitleController extends Controller
{
    public function info(Request $r): bool
    {
        $arr = UserTitle::query()->where([['userId', '=', $r->get('userId')], ['titleId', '=', $r->get('titleId')]])->first();
        if ($arr == NULL){
            return false;
        }
        else {
            return true;
        }
}
}
