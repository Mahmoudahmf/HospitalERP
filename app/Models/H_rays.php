<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class H_rays extends Model
{    
    
    use SoftDeletes;
    use HasFactory;
    // protected $table=['h_rays'];
    protected $fillable=['name','cost','type'];
}
