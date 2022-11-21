<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usertbl;
use App\Models\Region;
use App\Models\Province;
use App\Models\Municipality;
use App\Models\Barangay;

class CustomAuthController extends Controller
{
  
    public function registration(){

        $arrprovinces = Province::orderBy('id')->get();
        $arrmunicipalities = Municipality::orderBy('id')->get();
        $arrbarangays = Barangay::orderBy('id')->get();

        $userRegions = Region::orderBy('id', 'asc')->get();
        $userProvinces = Province::orderBy('id', 'asc')->get();
        $userMunicipalities = Municipality::orderBy('id', 'asc')->get();
        $userBarangays = Barangay::orderBy('id', 'asc')->get();
        
        return view('auth.registration', compact(['userRegions', 'userProvinces', 'userMunicipalities', 'userBarangays']));
    }
    public function getDropDownProvinces(Request $request)
    {
        $userProvinces = Province::where('region_id', '=', $request->region_id)
            ->orderBy('id', 'asc')
            ->get();

        $province_array = array();
        $i = 0;
        foreach($userProvinces as $userProvince){
            $province_array[$i] = array(
                'id' => $userProvince->id,
                'description' => $userProvince->description
            );
            $i++;
        }

        return json_encode(['arrprovinces' => $province_array]);
    }

    public function getDropDownMunicipalities(Request $request)
    {
        $userMunicipalities = Municipality::where('province_id', '=', $request->province_id)
            ->orderBy('id', 'asc')
            ->get();

        $usermunicipality_array = array();
        $i = 0;
        foreach($userMunicipalities as $userMunicipality){
            $usermunicipality_array[$i] = array(
                'id' => $userMunicipality->id,
                'description' => $userMunicipality->description
            );
            $i++;
        }

        return json_encode(['arrmunicipalities' => $usermunicipality_array]);
    }

    public function getDropDownBarangays(Request $request)
    {
        $userBarangays = Barangay::where('municipality_id', '=', $request->municipality_id)
            ->orderBy('id', 'asc')
            ->get();

        $userbarangay_array = array();
        $i = 0;
        foreach($userBarangays as $userBarangay){
            $userbarangay_array[$i] = array(
                'id' => $userBarangay->id,
                'description' => $userBarangay->description
            );
            $i++;
        }

        return json_encode(['arrbarangays' => $userbarangay_array]);
    }

}
