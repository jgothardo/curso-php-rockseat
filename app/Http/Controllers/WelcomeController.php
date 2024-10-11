<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    //    $user = User::query()->create([
    //         'name' => 'Jeremias',
    //         'email' => 'jeremias@vejoseries.com',	
    //         'password' => bcrypt('123456'),
    //     ]);

    //$user = User::find(1);
    // $user->email_verified_at = now();
    // $user->save();

    //Auth::login($user);
    //Auth::logout();

        //dd($user->email_verified_at->diffForHumans());
        //return view('teste.jeremias');

        
        return view('welcome');
    }
}
