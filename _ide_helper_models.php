<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Model{
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
 */
	class Admin extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Emp
 *
 * @property int $EMPNO
 * @property string|null $ENAME
 * @property string|null $JOB
 * @property int|null $MGR
 * @property string|null $HIREDATE
 * @property float|null $SAL
 * @property float|null $COMM
 * @property int|null $DEPTNO
 * @method static \Illuminate\Database\Eloquent\Builder|Emp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Emp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Emp query()
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereCOMM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereDEPTNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereEMPNO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereHIREDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereJOB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereMGR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereSAL($value)
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Query\Builder|Emp onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Emp whereId($value)
 * @method static \Illuminate\Database\Query\Builder|Emp withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Emp withoutTrashed()
 */
	class Emp extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

