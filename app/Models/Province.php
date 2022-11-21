<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'provinces';

    protected $guarded = [];

    protected $fillable = [];
}
