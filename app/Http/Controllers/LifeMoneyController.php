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
        $lifeMoneys = LifeMoney::paginate(10);
        return view('life.index',['lifeMoneys'=>$lifeMoneys]);

    }
    public function delete($id)
    {
        LifeMoney::destroy($id);
    	return '1';
    }
    public function add(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $lifeMoney =  new LifeMoney;
        $lifeMoney->name = $request->input('name');
        $lifeMoney->money  = $request->input('money');
        $lifeMoney->type = $request->input('type');
        $lifeMoney->userId = $request->session()->get('userId');
        $lifeMoney->save();
        return redirect()->route('life_index');
    }
    function mapData(Request $request){
        $year = $request->input('year');
        $results = DB::select("select sum(money) sum,month(created_at) month from lifemoney where year(created_at)=? GROUP BY month(created_at)",[$year]);
        $dataMonth=array("1","2","3","4","5","6","7","8","9","10","11","12");
        $outdata =array();
        foreach ($dataMonth as $value) {
            $isHas = False;
            foreach ($results as $result) {
                if ($value==$result->month) {
                    $outdata[]=$result->sum;
                    $isHas = True;
                }
            }
            if (!$isHas) {
                $outdata[]=0;
            }

        }
        return response()->json(['outdata'=>$outdata,'year'=>$year]);
    }
}
