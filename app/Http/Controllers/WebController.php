<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class WebController extends Controller
{
    public function contact(Request $request)
    {
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return back();
    }

    public function documentation()
    {
        return view('documentation');
    }
}
