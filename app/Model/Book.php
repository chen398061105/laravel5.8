<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //设置预加载机制，这样控制器就可以直接检索所有数据没有影响
    //protected $with = ['user'];

    //批量赋值取消
    protected $guarded = [];
    //取消自动时间字段
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')
                    ->withDefault([
                        'id'    =>  0,
                        'username'  =>  '游客用户'
                    ]);
    }
}
