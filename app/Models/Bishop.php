<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bishop extends Model
{
    use HasFactory;
    protected $fillable= ['contact', 'name' ];

    public function region(){
        return $this->hasOne(Region::class);
    }

    public function altar(){
        return $this->hasMany(Altar::class);

    }

    public function user_detail(){
        return $this->belongsTo(User_detail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
