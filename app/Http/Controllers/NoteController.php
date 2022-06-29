<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    function index (Request $request) {
        //if the user reloads the page, the session will be destroyed. So if that happens they will return to the login page
        if ($request->session()->has('message_title')) {
            return view('note');
        } else {
            return redirect()->route('home.index');
        }
    }
}
