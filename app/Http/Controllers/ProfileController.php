<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id) // Expecting an integer $id
    {
        $name = "Donald Trump";
        $age = "75";

        // Use the passed $id here
        $data = [
            'id' => $id,  // Use the $id variable here
            'name' => $name,
            'age' => $age,
        ];

        // Create a cookie
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = request()->getHost();
        $secure = app()->environment('production');
        $httpOnly = true;

        $cookie = Cookie::make($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        // Return JSON response along with the cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
