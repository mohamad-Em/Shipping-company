<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\backEnd\email\SendRequest;
use App\Http\Traits\imageTrait;
use App\Mail\BookingRate;
use App\Models\Book;
use App\Models\Note;
use App\Models\Rate;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    use imageTrait;

    public function index()
    {

        $records = Book::whereHas('user')->whereHas('customer')->where('user_id', Auth::id())->orwhere('operation_id', Auth::id())->get();

        return view('profile.ticket.index', compact('records'));
    }

    public function ticketAll()
    {
        $records = Book::whereHas('customer')->whereHas('rate')->get();

        return view('profile.ticket.all', compact('records'));
    }

    public function view($id)
    {
        $rate = Rate::whereHas('books')->whereRelation('books', 'id', $id)->get();
        if (Auth::user()->role == 'Super Admin') {
            $record = Book::whereHas('customer')->whereHas('rate')->where('id', $id)->get();
        } else {
            $record = Book::whereHas('customer')->whereHas('rate')->whereHas('user')->where('id', $id)->get();
        }
        $notes = Note::whereHas('book')->whereHas('user')->whereRelation('book', 'id', $id)->get();

        return view('profile.ticket.view', compact('id', 'record', 'rate', 'notes'));
    }

    public function email()
    {
        return view('profile.email.send');
    }

    protected $file;

    public function sendEmail(SendRequest $request)
    {
        $file = $request->file;
        $this->file = $file->getClientOriginalName();
        $pdf = FacadePdf::loadview('mail\BookingRate', compact('file'))->output();
        Mail::to('mohammedemerle@gmail.com')->send(new BookingRate($pdf));

        return redirect()->back()->with(['success' => 'Send Email Successfully']);
    }
}
