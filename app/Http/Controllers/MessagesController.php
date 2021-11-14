<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $messages = Message::with('userFrom')->where('user_id_to', Auth::id())->get();
        // dd($messages);
        return view('home')->with('messages', $messages);
    }
    public function create(){
        $users = User::where('id', '!=' ,Auth::id())->get();
        // dd($messages);
        return view('create')->with('users', $users);
    }
}
