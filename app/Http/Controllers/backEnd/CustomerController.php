<?php

namespace App\Http\Controllers\backEnd;

use App\Exports\RateExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\backEnd\excel\StoreRequest;
use App\Imports\RateExcelFile;
use App\Models\Customer;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function excel()
    {
        $rates = Rate::where('Port_of_Loading_POL','!=','Port_of_Loading_POL')->get();
        $carbon = Carbon::now();
        return view('users.excel',compact('rates' ,'carbon'));
    }
    public function export()
    {
        return Excel::download(new RateExport, 'rates.xlsx');
    }
    public function import(StoreRequest $request)
    {
        if ($request->file('file')) {
            $delete = Rate::getQuery()->delete();
                Excel::import(new RateExcelFile, $request->file('file')->store('temp'));
                return back();
            }
    }

    public function customers()
    {
        $customers = Customer::all();
        return view('customers.customers', compact('customers'));
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->back();
    }

}
