<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\backEnd\rate\CheckPriceRequest;
use App\Models\Rate;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function checkPrice()
    {
        $rates = Rate::where('id','!=',1)->get();
        return view('users.ports.checkPrice',compact('rates'));
    }
    public function search(CheckPriceRequest $request)
    {
        $search = Rate::where('Port_of_Loading_POL', 'LIKE', '%' . $request->Port_of_Loading_POL . '%')
            ->where('Country_of_Origin', 'LIKE', '%' . $request->Country_of_Origin . '%')
            ->where('Port_of_Destination_POD', 'LIKE', '%' . $request->Port_of_Destination_POD . '%')
            ->where('Country_of_Destination', 'LIKE', '%' . $request->Country_of_Destination . '%')
            ->get();
        if($search)
        {
            return view('users.ports.resultSearch',compact('search'));
        }
    }
}
