<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use Illuminate\Mail\Events\MessageSent;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage()
    {
        return "yes";
    }
}
