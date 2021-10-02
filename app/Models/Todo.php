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
        'deadline',
        'is_archive'
    ];

    public $casts = [
        'deadline' => 'datetime'
    ];


    // MUTATORS
    public function getIsPassAttribute() {
        return Carbon::now()->lt($this->deadline);
    }

    public function getLessonFormatAttribute() {
        switch ($this->lesson) {
            case '1':
                return 'Pendidikan Agama Islam';
            case '2':
                return 'Pendidikan Agama Katolik';
            case '3':
                return 'Pendidikan Agama Kristen Protestan';
            case '4':
                return 'Pendidikan Agama Hindu';
            case '5':
                return 'Pendidikan Agama Budha';
            case '6':
                return 'Bahasa Inggris 1';
            case '7':
                return 'Kalkulus';
            case '8':
                return 'Logika Informatika';
            case '9':
                return 'Algoritma dan Pemrograman Dasar';
            case '10':
                return 'Pengantar Teknologi Informasi';
            case '11':
                return 'Pendidikan Pancasila';
            case '12':
                return 'Ilmu Sosial dan Budaya Dasar';
            case '13':
                return 'Fisika Dasar';
            default:
                return $this->lesson;
                break;
        }
    }

    // SCOPE
    public function scopeArchive($query) {
        return $query->where('is_archive', 1);
    }

    public function scopeActive($query) {
        return $query->where('is_archive', 0);
    }
}
