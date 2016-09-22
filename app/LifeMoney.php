<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LifeMoney extends Model
{
    protected $table = 'lifeMoney';
    public $timestamps = true;

    protected function getDateFormat(){
        return time();
    }

    protected function asDateTime($val){
        return $val;
    }
}
