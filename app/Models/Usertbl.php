<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'usertbl';

    protected $guarded = [];

    protected $fillable = [];

    public function pres_region()
    {
    	return $this->belongsTo('App\Models\Region', 'pres_region_id', 'id');
    }

    public function pres_province()
    {
    	return $this->belongsTo('App\Models\Province', 'pres_province_id', 'id');
    }

    public function pres_municipality()
    {
    	return $this->belongsTo('App\Models\Municipality', 'pres_municipality_id', 'id');
    }

    public function pres_barangay()
    {
    	return $this->belongsTo('App\Models\Barangay', 'pres_barangay_id', 'id');
    }

    public function present_address()
    {
        $street = strlen(trim($this->pres_street_name)) != 0 ? strlen(trim($this->pres_street_name)) : '';
        return $street . ', '
            . $this->pres_barangay()->description . ',  '
            . $this->pres_municipality()->description . ',  '
            . $this->pres_province()->description . ',  '
            . $this->pres_region()->abbreviation;
    }

   
}
