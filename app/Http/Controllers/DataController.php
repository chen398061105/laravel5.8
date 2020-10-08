<?php

namespace App\Http\Controllers;

use App\Model\Book;
use App\Model\User;
use App\Model\Admin;
use Barryvdh\Debugbar\Facade as Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    function debugInfo(){

//        $users = User::all();
//        foreach ($users as  $user){
//            Debugbar::info($user->username);
//        }
        //预加载机制，加一个with 对应表 可以优化sql
//        $books = Book::with('user')->get();
//        foreach ($books as $book){
//            Debugbar::info($book->user->username);
//        }

        //关联下添加数据
        $user = User::find(19);
        $user->book()->createMany([
            ['title'=>'test1'],
            ['title'=>'test2']
                    ]);

        return view('demo.debug');
    }

    function index()
    {
        //查询构造器    返回的是对象
//        $data = DB::table('emp')->select('ename');
//        return response()->json($data);

//        $data = DB::table('emp')->select('ename')->get();
//        return $data;

//    原生法 返回的是json
//        $data = DB::select('select ename from emp');
//        return $data;

//        $data = DB::table('emp')->pluck('ename');
        //分块处理数据大量的时候,取姓名字段 取前三条记录
//        DB::table('emp')->orderBy('empno')->chunk('3',function ($emp){
//             foreach ( $emp as $name){
//                 echo $name->ENAME.'-';
//             }
//             echo '<BR>';
//        });

//        查找软删除数据？
        $data = Admin::onlyTrashed()->get(); //查找只有软删除的数据

//        $allData = Admin::withTrashed()->get(); //包含软删除的数据
        $allData = Admin::withoutTrashed()->get();   //没有软删除的数据
        dd($allData);


    }

    //软删除
    function del()
    {
//        $data = Admin::destroy(1);
        //把软删除数据还原
//        dd($data->restore());
        //判断是否是软删除数据
        $data = Admin::withTrashed()->find(1);
//        dd( $data->trashed()); // 返回布尔值 1 是  软删除

        //强制真实删除
        if ($data) {
            $data->forceDelete();
        }
    }

    function show(){
        //genderMale 是封装的方法 无参数
//        $data = Admin::GenderMale()->where('score','>','50')->get();
        //genderMale 是封装的方法  可以传参 建议
//        $data = Admin::Gender('man')->where('score','>','50')->get();
         //带有修饰的输出
//        $data = Admin::find(3);
//        $gender = $data->gender;
//        dd($gender);

        //写入数据时候修改值
//         Admin::insert([
//            'name'=>'t',
//            'pwd'=>'t',
//            'gender'=>'man',
//         ]);

        //类似访问器
        $data = Admin::all();
        $collection = $data->map(function ($data){
            $data->gender = strtoupper($data->gender);
            return $data;
        });
        return $collection;

    }




}
