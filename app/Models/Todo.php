<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'lesson',
        'title',
        'description',
        'form_link',
        'deadline'
    ];

    public $casts = [
        'deadline' => 'datetime'
    ];


    // MUTATORS
    public function getIsPassAttribute() {
        return Carbon::now()->lt($this->deadline);
    }
}
