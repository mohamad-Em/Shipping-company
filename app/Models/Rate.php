<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
class Rate extends Model
{
    use HasFactory;
    protected $table = 'rates';
    protected $fillable = [
        'Agent_ID',
        'Port_of_Loading_POL',
        'Country_of_Origin',
        'Port_of_Destination_POD',
        'Country_of_Destination',
        'VESSEL_VOYAGE',
        'Cut_off',
        'Departure_Date',
        'Arrival_Date',
        '20_Standard',
        '40_Standard',
        '20_Refrigerated',
        '40_Refrigerated',
        '40_High_Cube',
        'container_currency',
        'Shipping_Line',
        'VALID',
        'Transit_time',
        'Routing',
        'Free_time_at_Origin',
        'Free_Time_at_Destination',
        'Rate_Type',
        'Booking_Type',
        'Origin_Charges_OTHC',
        'OTHC_Currency',
        'Destination_Charge_DTHC',
        'DTHC_Currency',
        'Documentation',
        'Docs_Currency',
        'Cancelation_fee',
        'Cancelation_Currency',
        'visits',
        'booking',
        'cst_id',
        'user_name',
    ];
    public function books()
    {
        return $this->hasMany(Book::class,'rate_id');
    }
}

