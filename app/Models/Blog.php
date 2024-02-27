<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $timestamps =false;
    protected $primaryKey ='id';
    protected $fillable = [
        'name',
        'email',
        'sex',
        'age',
        'phone',
        'content',
        'section'

    ];
}
