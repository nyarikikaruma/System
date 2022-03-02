<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable= ['name', 'bishop_id'];

    public function keyboardist(){
        return $this->belongsTo(User::class);
    }

    public function bishop(){
        return $this->belongsTo(Bishop::class);
    }
     
    public function altar(){
        return $this->hasMany(Altar::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
