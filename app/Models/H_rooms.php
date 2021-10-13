<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class H_rooms extends Model
{
    use HasFactory;
    protected $fillable=['room_number','floor_no','status','duration','m_nurseId','n_nurseId'];

    public function M_nurses()
    {
        return $this->hasMany('App\Models\H_nurse','m_nurseId');
    }

    public function N_nurses()
    {
        return $this->hasMany('App\Models\H_nurse','n_nurseId');
    }

}