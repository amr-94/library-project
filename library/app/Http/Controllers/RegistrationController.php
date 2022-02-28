<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;



use app\http\Controllers\Auth;


class RegistrationController extends Controller
{
    // public function create()
    // {
    //     return view('frontend.registration');
    // }
    //  public function store()
    // {
    //     $this->validate(request(), [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     $user = User::create(request(['name', 'email', 'password']));

    //     auth()->Login($user);

    //     return redirect()->to('home');
    // }


    //    حذف user
    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect('dashbord');
    }




}
