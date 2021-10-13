<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class H_departments extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name'];
     
}
