<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Model\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $pwd
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Query\Builder|Admin onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Admin withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Admin withoutTrashed()
 * @mixin \Eloquent
 */
class Admin extends Model
{
    //
    protected $table = 'admins';
    protected $primaryKey='id';
    protected $fillable =['name,pwd,man,gender,score'];
//    public $timestamps =false;
    use SoftDeletes;

    //可以封装常用的sql语句 scope+方法名
    //本地封装 性别 男的条件语句 死板
    public function scopeGenderMale($query){
        return $query->where('gender','man');
    }

    ////本地封装 性别 条件语句 可以传参
    public function scopeGender($query,$value){
        return $query->where('gender',$value);
    }

    //全局也可以设置
     //启动
//   protected static function booted(){
//        parent::booted();
//        static::addGlobalScope(new \ScopsDb());
//   }
    //设置访问器，简单说就是字段内容显示前修改样式
    //语法格式 getFooAttribute Foo是你的字段名，如果是name_fam这种格式 则getNameFamAttribute
//    public function getGenderAttribute($value){
//
//        return ($value == 'man')?'M_'.$value:'W_'.$value;
//    }
//    //修改器
//    public function setGenderAttribute($value){
//
//        $this->attributes['gender']=strtoupper($value);
//    }


}
