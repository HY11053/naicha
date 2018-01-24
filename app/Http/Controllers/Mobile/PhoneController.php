<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Admin;
use App\AdminModel\Phonemanage;
use App\Events\PhoneEvent;
use App\Notifications\MailSendNotification;
use Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneController extends Controller
{

    function Complates(Request $request)
    {
        if(empty(Phonemanage::where('phoneno',$request->input('phoneno'))->value('phoneno')))
        {
            $request['ip']=$request->getClientIp();
            $request['host']=$request->input('host');
            //$request['referer']=$request->session()->all()['referer'][0];
            $request['referer']=$request['host'];
            $request['name']=$request->input('name')?$request->input('name'):'未知';
            Phonemanage::create($request->all());
            event(new PhoneEvent(Phonemanage::latest() ->first()));
            Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
            //$info=['statusinfo'=>'电话提交成功，我们将尽快与您联系'];
            //echo $request->input('callback')."(".json_encode($info).")";
            echo '电话提交成功，我们将尽快与您联系';
        }else{
            echo '电话号码已存在，请点击在线咨询客服';
        }

    }


    function phoneComplates(Request $request)
    {
        if(empty(Phonemanage::where('phoneno',$request->input('phoneno'))->value('phoneno')))
        {
            $request['ip']=$request->getClientIp();
            $request['host']=$request->input('host');
            $request['referer']=$request->session()->all()['referer'][0];
            $request['name']=$request->input('name')?$request->input('name'):'未知';
            Phonemanage::create($request->all());
            event(new PhoneEvent(Phonemanage::latest() ->first()));
            Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
            echo '电话提交成功，我们将尽快与您联系';
        }else{
            echo '电话号码已存在，请点击在线咨询客服';
        }

    }

    function phoneButtomComplates(Request $request)
    {
        if(empty(Phonemanage::where('phoneno',$request->input('msg_phone'))->value('phoneno')))
        {
            $request['ip']=$request->getClientIp();
            $request['host']=$request->input('hosturl');
            $request['phoneno']=$request->input('msg_phone');
            $request['referer']=$request->session()->all()['referer'][0];
            $request['name']=$request->input('msg_name')?$request->input('msg_name'):'未知';
            Phonemanage::create($request->all());
            event(new PhoneEvent(Phonemanage::latest() ->first()));
            Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
            echo '电话提交成功，我们将尽快与您联系';
        }else{
            echo '电话号码已存在，请点击在线咨询客服';
        }

    }
}
