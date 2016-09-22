<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\LifeMoney;
class LifeMoneyController extends Controller
{
    //学习列表页
     public function item()
    {
        //查询
        $lifeMoneys = LifeMoney::get();
        return ";;;";
        // return view('life.index')->with(array('results' => $lifeMoneys)); ;

    }
}
