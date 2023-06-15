<?php

namespace App\Imports;

use App\Models\Rate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithUpsertColumns;
use Maatwebsite\Excel\Concerns\WithUpserts;

class RateExcelFile implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Rate([
            "Agent_ID" => $row[0],
            "Port_of_Loading_POL" => $row[1],
            "Country_of_Origin" => $row[2],
            "Port_of_Destination_POD" => $row[3],
            "Country_of_Destination" => $row[4],
            "VESSEL_VOYAGE" => $row[5],
            "Cut_off" => $row[6],
            "Departure_Date" => $row[7],
            "Arrival_Date" => $row[8],
            "20_Standard" => $row[9],
            "40_Standard" => $row[10],
            "20_Refrigerated" => $row[11],
            "40_Refrigerated" => $row[12],
            "40_High_Cube" => $row[13],
            "container_currency" => $row[14],
            "Shipping_Line" => $row[15],
            "VALID" => $row[16],
            "Transit_time" => $row[17],
            "Routing" => $row[18],
            "Free_time_at_Origin" => $row[19],
            "Free_Time_at_Destination" => $row[20],
            "Rate_Type" => $row[21],
            "Booking_Type" => $row[22],
            "Origin_Charges_OTHC" => $row[23],
            "OTHC_Currency" => $row[24],
            "Destination_Charge_DTHC" => $row[25],
            "DTHC_Currency" => $row[26],
            "Documentation" => $row[27],
            "Docs_Currency" => $row[28],
            "Cancelation_fee" => $row[29],
            "Cancelation_Currency" => $row[30],
            "user_name" => Auth::user()->name
        ]);
    }

}
