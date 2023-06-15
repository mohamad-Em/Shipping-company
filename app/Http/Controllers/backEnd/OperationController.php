<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Mail\OperationMail;
use App\Models\Book;
use App\Models\Note;
use App\Models\Rate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OperationController extends Controller
{
    public function index()
    {
        $books = Book::whereHas('customer')->where('operation_id', '=', null)->where('status', '=', 'Operations')->get();
        return view('users.operations.index', compact('books'));
    }
    public function view($id)
    {
        $user_id = Book::where('id', $id)->update([
            'operation_id' => Auth::id(),
        ]);
        $rate = Rate::whereHas('books')->whereRelation('books','id',$id)->get();
        $record = Book::whereHas('customer')->whereHas('rate')->where('id', $id)->get();
        $notes = Note::whereHas('book')->whereHas('user')->whereRelation('book','id',$id)->get();
        return view('users.operations.view', compact('record','rate','notes'));
    }
    public function updateStatus($id)
    {
        $record = Book::find($id);
        $record->update(['status' => 'EVGM']);
        return redirect()->route('user.operation');
    }
    public function PDF($id)
    {
        $record = Book::whereHas('customer')->whereHas('rate')->whereHas('user')->where('id', $id)->get();
        return view('users.operations.pdf',compact('record'));
    }
    public function generatePDF($id)
    {
        $record = Book::whereHas('customer')->whereHas('rate')->whereHas('user')->where('id', $id)->get();
        $pdf = Pdf::loadView('users.operations.pdf', compact('record'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('book.pdf');
    }
}
