<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;

class MailController extends Controller
{
    //
    public function getMail()
    {
        $data = ['name' => 'Rafa'];
        Mail::to('ceiforestudios87@gmail.com')->send(new TestMail($data));
    }
}
