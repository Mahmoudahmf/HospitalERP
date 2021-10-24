<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class H_rooms extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['room_number','floor_no','status','duration','nurseId'];

    

    // relation with nurses model
  public function nurses()
  {
     return $this->belongsto('App\Models\H_nurse','nurseId');
  }

}