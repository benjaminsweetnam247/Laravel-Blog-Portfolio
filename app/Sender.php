<?php

namespace bens_portfolio;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $fillable = [
        'email',
        'name',
        'subject',
        'body'
    ];
}
