<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'regions';

    protected $guarded = [];

    protected $fillable = [];
}
