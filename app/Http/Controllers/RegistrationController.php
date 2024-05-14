<?php

namespace App\Http\Controllers;

use App\Models\User;


class RegistrationController extends Controller
{

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('dashbord');
    }
}
