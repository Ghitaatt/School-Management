<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $table = 'files';

    protected $fillable = [

        'name',
        'type',
        'size',
        'niveau'
    ];

    use HasFactory;
}
