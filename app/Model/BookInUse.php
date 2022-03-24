<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookInUse extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id_book',
        'id_user',
        'date_vidachi',
        'date_cdachi',
    ];

    protected static function booted()
    {
        static::created(function ($bookinuse) {
            $bookinuse->save();
        });
    }
}