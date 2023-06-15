<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\backEnd\user\LoginRequest;
use App\Http\Requests\backEnd\user\StoreRequest as UserStoreRequest;
use App\Http\Requests\backEnd\user\UpdateRequest;
use App\Http\Traits\imageTrait;
use App\Models\Book;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use imageTrait;

    public function login()
    {
        return view('users.index');
    }

    public function loginStore(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('web')->attempt($data)) {
            return redirect()->intended('user/home');
        } else {
            return redirect()->back()->with(['errorLogin' => 'There is an error in the data']);
        }
    }

    public function dashboard()
    {
        $SalesBook = Book::where('status', 'sales')->count();
        $OpretionBook = Book::where('status', 'operations')->count();
        $EvgmBook = Book::where('status', 'EVGM')->count();
        $Customers = Customer::all()->count();
        $Target = Book::whereHas('user')->whereRelation('user', 'id', Auth::id())->count();

        return view('users.dashboard', compact('SalesBook', 'OpretionBook', 'EvgmBook', 'Customers', 'Target'));
    }

    public function all()
    {
        $users = User::where('id', '!=', Auth('web')->user()->id)->get();

        return view('users.all', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    public function store(UserStoreRequest $request)
    {
        $fullName = $this->saveImage($request->image, 'images/user');
        $store = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fullName' => $request->fullName,
            'phone' => $request->phone,
            'role' => $request->role,
            'image' => $fullName,
        ]);
        if ($store) {
            return redirect()->route('user.all');
        }
    }

    public function edit($id)
    {
        $edit = User::where('id', $id)->get();
        $roles = Role::pluck('name', 'name')->all();

        return view('users.edit', compact('edit', 'roles'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $user = User::find($id);
        $data = $request->all();
        $user->update($data);

        return redirect()->route('user.all');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('user.login');
    }
}
