<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class H_operations extends Model
{
    use HasFactory;
    
    protected $fillable=['type','cost','patien_id','doctor_id','dept_id','room_id','emp_id'
     ,'description','reversation_num'];


     //relation with patient
     public function patient()
     {
         return $this->belongsto('App\Models\H_patients','patien_id');
     }

    
     //relation with patient
     public function doctor()
     {
         return $this->belongsto('App\Models\H_doctors','doctor_id');
     }

      //relation with rooms
      public function rooms()
      {
          return $this->belongsto('App\Models\H_rooms','room_id');
      }

      public function departments()
      {
        return $this->belongsto('App\Models\H_departments','dept_id');

      }

}
