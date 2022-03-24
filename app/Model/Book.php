<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'avtor',
        'title',
        'publication_date',
        'price',
        'new_publication',
        'annotation',
        'spros'
    ];

    protected static function booted()
    {
        static::created(function ($book) {
            $book->save();
        });
    }
}