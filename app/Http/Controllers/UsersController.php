<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Session;
use Illuminate\View\View;

use function Laravel\Prompts\password;
use function Webmozart\Assert\Tests\StaticAnalysis\email;

class UsersController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('registration');
    }
    public function store(Request $request): RedirectResponse
    {
        $userData = $request->only('first_name', 'last_name', 'email', 'mobile', 'country', 'dob', 'user_type', 'password',);
        $userData['password'] = Hash::make($userData['password']);

        Users::create($userData);
        return redirect()->route('login')->with(["success" => 'A new account created Successfully']);
    }

    public function login_dashboard(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            if (Auth::user()->user_type == 1) {
                return redirect()->route('admin_dashboard');
            } else {
                return redirect()->route('user_dashboard');
            }
        }

        return redirect()->route('login')->with(['fail' => 'Provided credentials are not valid!']);
    }

    public function user()
    {
        $user = Auth::user();
        return view('user',compact('user'));
    }

    public function admin()
    {
        $user = Auth::user();
        return view('admin',compact('user'));
    }

   public function action()
   {
       $userAllData=Users::latest()->get();
       return view('action',compact('userAllData'));
   }
    public function edit_user()
    {
        if (auth()->user()-> User_Type == 1) {
            $userAlldata = Users::where('email', auth()->user()->email)->latest()->get();
            return view('action', compact('userAlldata'));
        } elseif (auth()->user()->user_type == 2) {
            $userAlldata = Users::where('email', auth()->user()->email)->latest()->get();
            return view('action', compact('userAlldata'));
        }
    }


    public function destroy(int $id): RedirectResponse
    {
      Users::where('id', $id)->delete();
        return redirect()->route("registration")->with('success','Your info deleted  successfully in Database');
    }
    public function update_user(Request $request): RedirectResponse
    {
       Users::where('id', $request->id)->update($request->only('first_name', 'last_name', 'email', 'mobile', 'country', 'dob'));
        return redirect()->route("action")->with('success','Your info updated   successfully in Database');
    }
}
