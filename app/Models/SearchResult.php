<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchResult extends Model
{

    use HasFactory;
    protected $guarded = false;

    protected $table = 'search_results';


    protected $fillable = [
        'search_query',
        'github_response'
    ];
    protected $casts = [
        'github_response' => 'array',
    ];

}
