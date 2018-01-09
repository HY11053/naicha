<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Admin;
use App\Http\Requests\UserRegsiterRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**
     * 后台用户列表
     * @param
     *
     * @return 后台用户数据
     */

    function Index()
    {
        $adminlists=Admin::all();
        return view('admin.adminlist',compact('adminlists'));
    }

    /**
     * 后台用户注册
     * @param
     *
     * @return
     */

    function Register()
    {
        return view('admin.adminregister',compact('adminlists'));
    }
    /**
     * 后台用户注册处理
     * @param
     *
     * @return
     */
    function PostRegister(UserRegsiterRequest $request)
    {
        $request['password']=bcrypt($request['password']);
        Admin::create($request->all());
        return redirect(action('Admin\AdminController@Index'));
    }
    /**
     * 后台用户编辑
     * @param
     *
     * @return
     */

    function Edit($id)
    {
        $adminUser=Admin::find($id);
        return view('admin.adminedit',compact('adminUser'));
    }
    /**
     * 后台用户编辑提交处理
     * @param
     *
     * @return
     */
    function PostEdit(UserRegsiterRequest $request,$id)
    {
        $request['password']=bcrypt($request['password']);
        Admin::find($id)->update($request->all());
        return redirect(action('Admin\AdminController@Index'));
    }
    function Delete($id)
    {
        Admin::find($id)->delete();
        redirect(action('Admin\AdminController@Index'));
        return redirect(action('Admin\AdminController@Index'));
    }
    /**
     * 后台用户授权
     * @param
     *
     * @return
     */
    function Userauth()
    {
        abort(403);
    }
    public function NotificationClear()
    {
        $admin=Admin::find(auth('admin')->user()->id);
        $admin->unreadNotifications->markAsRead();
        return redirect()->back();

    }

}
