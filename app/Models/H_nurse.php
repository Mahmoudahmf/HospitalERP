<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class H_nurse  extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    protected $fillable=[
      'username','password','name','role','phone',
                      'attachment','title','salary','dept_id','status','from_date','to_date'];
    protected $hidden = [
        'password',
        'remember_token',
    ];


// relation with department model
  public function department()
  {
     return $this->belongsto('App\Models\H_departments','dept_id');
  }
   

  

}
