<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'region', 'altar', 'contact', 'thumbnail'];

    /**
     * Inverse one to one relationship with users table
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
