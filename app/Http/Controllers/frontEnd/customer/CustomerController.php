<?php

namespace App\Http\Controllers\frontEnd\customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontEnd\book\StoreRequest as BookStoreRequest;
use App\Http\Requests\frontEnd\customer\EmailVerifcation;
use App\Http\Requests\frontEnd\customer\LoginCustomerStore;
use App\Http\Requests\frontEnd\customer\StoreRequest;
use App\Http\Traits\imageTrait;
use App\Http\Traits\loop;
use App\Mail\BookingRate;
use App\Mail\customerMail;
use App\Models\Book;
use App\Models\Customer;
use App\Models\EmailSetting;
use App\Models\Rate;
use Carbon\Carbon;
use Ichtrojan\Otp\Models\Otp;
use Ichtrojan\Otp\Otp as OtpOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    use imageTrait;
    use loop;

    public function __construct()
    {
        $this->otp = new OtpOtp;
    }

    public function login(LoginCustomerStore $request)
    {
        $user = Customer::where('email', $request->email)->first();
        $otp = Otp::where('identifier', $request->email)->select('token')->get();
        $email_verified = Customer::where('email_verified_at', $request->email)->first();

        if ($user && $user['email_verified_at'] !== null) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->plainTextToken;
                $response = ['token' => $token];

                return response()->json([
                    'message' => 'Login Successfully',
                    'token' => $token,
                ]);
            } else {
                $response = ['message' => 'Password mismatch'];

                return response($response, 422);
            }
        } else {
            $response = ['message' => 'Admin does not exist'];

            return response($response, 422);
        }
    }

    private $otp;

    public function store(StoreRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['image'] = $this->saveImage($data['image'], 'images/customers');
        $customer = Customer::create($data);
        $user = $customer->name;
        $otp = $this->otp->generate($customer->email, 6, 40);
        $code = $otp->token;
        $email = EmailSetting::all();
        foreach ($email as $row) {
            Mail::to($customer->email)->send(new customerMail($user, $code));
        }

        return response()->json($customer, 200);
    }

    public function emai_verified(EmailVerifcation $request)
    {
        $data = $request->all();
        $otp = Otp::where('identifier', $request->email)->get();
        foreach ($otp as $row) {
            if ($data['otp'] == $row->token) {
                $email_verified = Customer::where('email', $request->email)->update([
                    'email_verified_at' => Carbon::now(),
                ]);

                return response()->json([
                    'message' => 'Email Verified Successfully',
                ]);
            } else {
                return response()->json([
                    'message' => 'You must check the otp code',
                ]);
            }
        }
    }

    public function search(Request $request)
    {
        $rates = Rate::where('Port_of_Loading_POL', 'LIKE', '%'.$request->Port_of_Loading_POL.'%')
            ->where('Country_of_Origin', 'LIKE', '%'.$request->Country_of_Origin.'%')
            ->where('Port_of_Destination_POD', 'LIKE', '%'.$request->Port_of_Destination_POD.'%')
            ->where('Country_of_Destination', 'LIKE', '%'.$request->Country_of_Destination.'%')
            ->get();

        if (count($rates) > 0) {
            return response()->json([
                'message' => 'Search Successfully',
                'info' => $rates,
            ]);
        } else {
            return response()->json([
                'message' => 'Search Error',
            ]);
        }
    }

    public function book(BookStoreRequest $request)
    {
        $data = $request->all();
        $data['customer_id'] = Auth::id();
        $data['rate_id'] = $request->rate_id;
        $row = Book::where('customer_id', Auth::id())->where('rate_id', $request->rate_id)->count();
        if ($row == 0) {
            $customer = Customer::where('id', Auth::id())->select('email')->get();
            // Mail::to($customer)->send(new BookingRate());
            $book = Book::create($data);

            return response()->json([
                'message' => 'Create Successfully',
                'Book' => $book,
            ]);
        } else {
            return response()->json([
                'message' => 'The Booking Already Exsist',
            ]);
        }
    }

    public function viewBook()
    {

        $view = Book::whereHas('customer')->whereHas('rate')->whereRelation('customer', 'id', Auth::id())->get();

        return response()->json([
            'result' => $view,
        ]);
    }
}
