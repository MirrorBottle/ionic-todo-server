<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absent extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'lecture_id', 'date', 'meeting'];

    // RELATIONSHIP
    public function lecture() {
        return $this->belongsTo(Lecture::class, 'lecture_id');
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
