<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TestMail;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    //
    public function index()
    {
        //
        $holidays = Holiday::orderBy('id', 'desc')->paginate(8);
//        $holidays = Holiday::all();
        return view('admin.admin', ['holidays' => $holidays]);
    }

    public function create(Request $request)
    {
        $dataValidated = $request->validate([

            'name' => 'required|min:5|max:500',
            'email' => 'required|min:5|max:500',
            'reason' => 'required|min:5|max:500',
            'beginning' => 'required|min:5|max:500',
            'finished' => 'required|min:5|max:500'
        ]);
        // dd($dataValidated);
        Holiday::create($dataValidated);
        $name = $request->input('name');
        $email = $request->input('email');
        $data = ['admin' => 'Admin', 'name' => $name, 'email' => $email];
        Mail::to('ceiforestudios87@gmail.com')->send(new TestMail($data));
        return back()->with('status', 'Post creado con éxito');
    }

    public function destroy(Holiday $holiday)
    {
        //
//        $holiday = Holiday::findOrFail($id);
        $holiday->delete();
        return back()->with('status', 'Post eliminado con éxito');
    }
}
