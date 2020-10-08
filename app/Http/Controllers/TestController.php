<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    function  index(){

        return redirect()->route('b');
    }
    function  a(){

        echo "重定向到b咯";
    }

    function res(){
        //可以改变状态 header头信息
        return response('index',211);
    }

    function putform(){
        return view('demo.one');
    }

    //自定义快速验证规则 app/Http/Requests/Form.php 这里面定义   function form(Form $request)
//    function form(Form $request){
    function form(Request $request){
//框架自带的验证英语
//         $request->validate([
//             'username' => 'required',
//             'pwd' => 'required',
//         ]);
//        //自定义验证规则
//        $request->validated();


        //手动验证
        $validator = Validator::make($request->post(),[
             'username' => 'required|min:3',
             'pwd' => 'required',
            ]);
        //验证结束前 这个位置可以给隐藏字段加验证
        $validator->after(function ($validator){
            //验证钩子
            $validator->errors()->add('info','info字段不存在');
        });

        if ($validator->fails()){
            return redirect('putform')->withErrors($validator)->withInput();
        }

        echo '验证成功！';
    }
}
