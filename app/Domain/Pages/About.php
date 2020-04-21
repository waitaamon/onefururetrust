<?php

namespace App\Domain\Pages;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['title', 'body', 'image'];
}
