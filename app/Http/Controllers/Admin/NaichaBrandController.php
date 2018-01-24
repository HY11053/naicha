<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Naichabrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NaichaBrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function importBrands()
    {
        $contents = Storage::get('brands.txt');
        $brands = explode(PHP_EOL,$contents);
        foreach ($brands as $brand)
        {
            if(!empty($brand) && empty(Naichabrand::where('brand',$brand)->value('brand')))
            {
                Naichabrand::create(['brand'=>$brand,'type'=>'奶茶店','num'=>1]);
                //dd(BrandDatas::where('brands','like','%'.$arr.'%')->value('brands'));
            }else{
                Naichabrand::where('brand',Naichabrand::where('brand',$brand)->value('brand'))->update(['num'=>Naichabrand::where('brand',$brand)->value('num')+1]);
            }
        }
        echo 'SUCCESS';
    }

    public function brandListsView()
    {
        $datas=Naichabrand::orderBy('num','desc')->paginate(50);
        return view('admin.brands',compact('datas'));
    }
    public function Status(Request $request)
    {
        Naichabrand::where('id',$request->id)->update(['status'=>1]);
        return '已使用';
    }
    public function Delete($id)
    {
        Naichabrand::where('id',$id)->delete();
        return redirect()->back();
    }
}
