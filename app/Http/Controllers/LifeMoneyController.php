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
        $lifeMoneys = LifeMoney::paginate(20);
        return view('life.index',['lifeMoneys'=>$lifeMoneys]);

    }
    public function delete($id)
    {
    	# code...
    }
}
