<?php

namespace bens_portfolio;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'from_address',
        'name',
        'message'
    ];
}
