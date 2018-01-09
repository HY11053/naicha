<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Addonarticle extends Model
{
    //,
    protected $fillable=['id','body','brandname','typeid','brandtime','brandorigin','brandnum','brandpay','brandarea','brandmap','brandperson','brandattch','brandapply','brandchat','brandgroup','brandgroup','brandaddr','brandduty','imagepics','jmxq_content','jmys_content','jmlc_content','jmzc_content','jmask_content','acreage','genre','decorationpay','quartersrent','equipmentcost','workingcapital','laborquarter','miscellaneous','dailyvolume','unitprice','watercoal','licenseno','bdxg_search','registeredcapital'];
    public function archive(){
        return $this->belongsTo('App\AdminModel\Archive', 'id');
    }
    public function arctype()
    {
        return $this->belongsTo('App\AdminModel\Arctype','typeid');
    }
}

