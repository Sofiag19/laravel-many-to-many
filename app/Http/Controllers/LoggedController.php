<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class LoggedController extends Controller
{
    public function showUser()
    {
        return view('pages.userShow');
    }

    public function setUserImg(Request $request){
        $file = $request -> file('image');
        //dd($file);
        $filename = $file -> getClientOriginalName();
        $file -> move('images', $filename);
        $newData = [
            'image' => $filename
        ];
        Auth::user() -> update($newData);
        return redirect() -> route('user.show');
    }
}
