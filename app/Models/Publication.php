<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable=[
        'publication_author',
        'publication_title',
        'publication_genre',
        'publication_date',
        'publication_paper',
        'publication_publisher',
        'publication_keyword',
        'publication_pages'
    ];
}
