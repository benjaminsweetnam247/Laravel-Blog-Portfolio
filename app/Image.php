<?php

namespace bens_portfolio;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'title',
        'url',
        'comment'
    ];
}
