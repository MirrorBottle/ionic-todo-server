<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'lecture_id',
        'title',
        'description',
        'deadline',
        'is_archive'
    ];

    public $casts = [
        'deadline' => 'datetime'
    ];

    // RELATIONSHIP
    public function lecture() {
        return $this->belongsTo(Lecture::class, 'lecture_id');
    }


    // MUTATORS
    public function getIsPassAttribute() {
        return Carbon::now()->lt($this->deadline);
    }

    // SCOPE
    public function scopeArchive($query) {
        return $query->where('is_archive', 1);
    }

    public function scopeActive($query) {
        return $query->where('is_archive', 0);
    }
}
