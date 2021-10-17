<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allabout extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
}
