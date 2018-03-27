<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Ask;
use App\AdminModel\flink;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function Index()
    {
        //奶茶头部推荐品牌文档
        $lingshibrands=Archive::where('mid','1')->whereIn('id',[39,54,65,69,24,79,86,121,124,139])->where('published_at','<=',Carbon::now())->take(10)->orderBy('id','asc')->get();
        $chaohuobrands=Archive::where('mid','1')->whereIn('id',[29,27,34,71,37,41,51,68,70,179])->where('published_at','<=',Carbon::now())->take(10)->orderBy('id','asc')->get();
        $ganguobrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',3)->where('published_at','<=',Carbon::now())->take(10)->latest()->get();
        $jinkoubrands=Archive::where('flags','like','%'.'c'.'%')->where('mid','1')->where('typeid',4)->where('published_at','<=',Carbon::now())->take(10)->latest()->get();
        //创业好店
        $cybrands=Archive::where('flags','like','%'.'s'.'%')->where('mid','1')->whereIn('typeid',[1,2,3,4])->where('published_at','<=',Carbon::now())->take(8)->latest()->get();
        $cysbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[1,2,3,4])->where('published_at','<=',Carbon::now())->take(11)->orderBy('click','desc')->get();
        $cybsbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[1,2,3,4])->where('published_at','<=',Carbon::now())->skip(11)->take(8)->orderBy('click','desc')->get();
        //奶茶品牌
        $latestlingshibrands=Archive::where('mid','1')->whereIn('typeid',[1])->where('published_at','<=',Carbon::now())->take(27)->latest()->get();
        $latestrlingshibrands=Archive::where('mid','1')->whereIn('typeid',[1])->where('published_at','<=',Carbon::now())->skip(27)->take(60)->latest()->get();
        //台湾奶茶品牌
        $latestchaohuobrands=Archive::where('mid','1')->whereIn('typeid',[3])->where('published_at','<=',Carbon::now())->latest()->take(27)->get();
        $latestrchaohuobrands=Archive::where('mid','1')->whereIn('typeid',[3])->where('published_at','<=',Carbon::now())->latest()->skip(27)->take(18)->latest()->get();
        //港式奶茶品牌
        $latestjinkoubrands=Archive::where('mid','1')->whereIn('typeid',[2])->where('published_at','<=',Carbon::now())->latest()->take(27)->get();
        $latestrjinkoubrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[2])->where('published_at','<=',Carbon::now())->latest()->take(18)->latest()->get();
        //网红奶茶品牌
        $seesbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[4])->where('published_at','<=',Carbon::now())->take(3)->orderBy('click','desc')->get();
        $seesrbrands=Archive::where('flags','like','%'.'p'.'%')->where('mid','1')->whereIn('typeid',[4])->where('published_at','<=',Carbon::now())->skip(3)->take(5)->orderBy('click','desc')->get();
        //奶茶百科
        $askrows=Archive::where('flags','like','%'.'a'.'%')->where('mid','<>',1)->take(3)->get();
        //奶茶大讲堂
        $recommendnews=Archive::where('flags','like','%'.'c'.'%')->where('mid','<>','1')->where('published_at','<=',Carbon::now())->latest()->take(2)->orderBy('published_at','desc')->get();
        $latesnews=Archive::where('mid','<>','1')->where('typeid','<>',5)->where('published_at','<=',Carbon::now())->latest()->take(6)->orderBy('published_at','desc')->get();
        //人群解读
        $crowdnews=Archive::where('mid','<>','1')->where('typeid',5)->where('published_at','<=',Carbon::now())->latest()->skip(6)->take(6)->orderBy('published_at','desc')->get();
        //采购信息
        $caiguonews=Archive::where('mid','<>','1')->where('shorttitle','like','%'.'奶茶'.'%')->where('published_at','<=',Carbon::now())->latest()->take(10)->orderBy('published_at','desc')->get();
        //创业指导
        $chuangyenews=Archive::where('mid','<>','1')->where('typeid',5)->where('published_at','<=',Carbon::now())->latest()->skip(12)->take(8)->orderBy('published_at','desc')->get();
        //展会信息
        $zhbrands=Archive::latest()->whereIn('typeid',[8])->where('published_at','<=',Carbon::now())->orderBy('published_at','desc')->take(8)->get();
        //友情链接
        $flinks=flink::latest()->orderBy('created_at','desc')->take(30)->get();
        return view('frontend.index',compact('lingshibrands','chaohuobrands','ganguobrands',
            'jinkoubrands','cybrands','cysbrands','cybsbrands','latestlingshibrands','latestrlingshibrands','latestchaohuobrands',
            'latestrchaohuobrands','latestjinkoubrands','latestrjinkoubrands','seesbrands','seesrbrands','recommendnews','latesnews','crowdnews','zhbrands','flinks','askrows','caiguonews','chuangyenews'));
    }
    function demo()
    {
    return view('frontend.demo');
    }
}
