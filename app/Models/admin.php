<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    public $timestamps = false;
     protected $fillable = ['id_AD', 'HoTenAD', 'MatKhau', 'Email', 'SoDT','DiaChi'];
    // protected $fillable = ['id_AD', 'HoTenAD', 'password', 'email', 'SoDT','DiaChi'];

    protected $primaryKey = 'id_AD';

 //   protected $guarded = 'admin';

    protected $table = 'admin';

    public function roles(){
        return $this->belongsToMany('App\Models\roles');
    }

    public function getAuthPassword(){
        return $this->MatKhau;
    }

    public function hasAnyRoles($roles){
        return null !== $this->roles()->whereIn('TenRoles',$roles)->first();
    }

    public function hasRole($role){
        return null !== $this->roles()->where('TenRoles',$role)->first();
    }
}
