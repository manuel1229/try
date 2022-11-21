<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class DropdownController extends Controller
{
    public function getDropDownCompanies(Request $request)
    {
        $cadetCompanies = Company::where('batallion_id', '=', $request->batallion_id)
            ->where('active', '=', 1)
            ->orderBy('id', 'asc')
            ->get();

        $company_array = array();
        $i = 0;
        foreach($cadetCompanies as $cadetCompany){
            $company_array[$i] = array(
                'id' => $cadetCompany->id,
                'description' => $cadetCompany->description
            );
            $i++;
        }

        return json_encode(['companies' => $company_array]);
    }
}
