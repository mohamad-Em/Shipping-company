<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\backEnd\rate\NoteRequest;
use App\Models\Book;
use App\Models\Note;
use App\Models\Rate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function index()
    {
        $books = Book::whereHas('customer')->where('user_id', '=', null)->where('status', '=', 'sales')->get();

        return view('users.sales.index', compact('books'));
    }

    public function view($id)
    {
        $user_id = Book::where('id', $id)->update([
            'user_id' => Auth::id(),
        ]);

        $rate = Rate::whereHas('books')->whereRelation('books', 'id', $id)->get();
        $record = Book::whereHas('customer')->whereHas('rate')->where('id', $id)->get();
        $notes = Note::whereHas('user')->whereRelation('book', 'id', $id)->get();

        return view('users.sales.view', compact('id', 'record', 'rate', 'notes'));
    }

    public function updateStatus(NoteRequest $request, $id)
    {
        $data = $request->all();
        $data['date'] = Carbon::now();
        $data['book_id'] = $id;
        $data['user_id'] = Auth::id();
        if ($data) {
            $store = Note::create($data);
            if ($store) {
                $status = Book::find($id);
                $status->update(['status' => 'operations']);

                return redirect()->back();
            }
        }
    }

    public function storeNote(NoteRequest $request, $id)
    {
        $data = $request->all();
        $data['date'] = Carbon::now();
        $data['book_id'] = $id;
        $data['user_id'] = Auth::id();
        $store = Note::create($data);

        return redirect()->back();
    }
}
