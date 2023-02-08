<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Gender;
use App\Models\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use voku\helper\ASCII;

class AccountController extends Controller
{
    public function register(){
        $role = Role::all();
        $gender = Gender::all();
        return view('register', compact('role', 'gender'));
    }

    public function createAccount(Request $request){
        $data = $request->validate([
            'first_name' => 'required|alpha|max:25',
            'last_name' => 'required|alpha|max:25',
            'email' => 'required|email|unique:accounts,email',
            'role_id' => 'required',
            'gender_id' => 'required',
            'display_picture_link' => 'required|mimes:jpg,png,jpeg',
            'password' => 'required|confirmed|min:8|alpha_num'
        ]);
        // dd($data);
        $filePath = $request->display_picture_link->getClientOriginalName();
        $data['password'] = Hash::make($data['password']);
        if($request->display_picture_link){
            $request->display_picture_link->move(public_path('ProfilePictures'), $filePath);
        }
        $data['display_picture_link'] = 'ProfilePictures/'.$filePath;
        Account::create($data);
        return redirect(route('login'));
    }

    public function login(){
        return view('login');
    }

    public function logUser(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('home'));
        }
        return redirect(route('login'));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('logoutIndex'));
    }

    public function profile(){
        $role = Role::all();
        $gender = Gender::all();
        $accountData = Account::where('id', Auth::user()->id)->first();
        return view('profile', compact('accountData', 'role', 'gender'));
    }

    public function updateProfile(Request $request){
        $data = $request->validate([
            'first_name' => 'required|alpha|max:25',
            'last_name' => 'required|alpha|max:25',
            'email' => 'required|email|unique:accounts,email',
            'gender_id' => 'required',
            'display_picture_link' => 'required|mimes:jpg,png,jpeg',
            'password' => 'required|confirmed|min:8|alpha_num'
        ]);
        $data['password'] = Hash::make($data['password']);
        if($request->display_picture_link){
            $filePath = $request->display_picture_link->getClientOriginalName();
            $request->display_picture_link->move(public_path('ProfilePictures'), $filePath);
            Account::where('id', Auth::user()->id)->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'gender_id' => $data['gender_id'],
                'display_picture_link' => 'ProfilePictures/'.$filePath,
                'password' => $data['password']
            ]);
        }

        return redirect(route('saved'));
    }

    public function saved(){
        return view('save');
    }

    public function accountMaintenance(){
        $accounts = Account::all();
        return view('account', compact('accounts'));
    }

    public function updateRolePage($id){
        // dd($acc);
        $account = Account::where('id', $id)->first();
        $role = Role::all();
        return view('updateRole', compact('account', 'role'));
    }

    public function updateRole(Request $request){
        Account::where('id', $request->account_id)->update([
            'role_id' => $request->role_id
        ]);
        return redirect(route('account'));
    }

    public function deleteAcc(Account $account){
        Account::destroy($account->id);
        return redirect(route('account'));
    }
}
