<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'Images';

    protected $fillable = [
                            'title',
                      'description',
                          'gallery',
                         'filename',
                            'image',
                        'extension'];
}

