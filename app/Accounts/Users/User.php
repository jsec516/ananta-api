<?php
namespace Qclinic\Accounts\Users;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract,  CanResetPasswordContract
{
    use Authenticatable,  SoftDeletes, CanResetPassword, EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * For soft deletes
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
    * Get the list of practitioners
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopePractitioners($query)
    {
        return $query->whereExists(function ($query) {
            $query->select(DB::raw(1))
            ->from(config('access.roles_table'))
            ->whereRaw(config('access.roles_table').'.user_id = '.$this->table.'.id and role_id='.config('access.base_roles.practitioner'));
        });
    }

    /**
    * Get the list of patients
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopePatients($query)
    {
        return $query->whereExists(function ($query) {
            $query->select(DB::raw(1))
            ->from(config('access.roles_table'))
            ->whereRaw(config('access.roles_table').'.user_id = '.$this->table.'.id and role_id='.config('access.base_roles.patient'));
        });
    }

    /**
    * Get the list of staffs
    *
    * @return \Illuminate\Database\Eloquent\Builder
    */
    public function scopeStaff($query)
    {
        return $query->whereExists(function ($query) {
            $query->select(DB::raw(1))
            ->from(config('access.roles_table'))
            ->whereRaw(config('access.roles_table').'.user_id = '.$this->table.'.id and role_id='.config('access.base_roles.staff'));
        });
    }

}
