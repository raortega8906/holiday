<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ResponseMail;
use App\Mail\TestMail;
use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{

    public function index()
    {
        // $holidays = Holiday::all();
        $holidays = Holiday::orderBy('id', 'desc')->paginate(10);
        return view('admin.admin', ['holidays' => $holidays]);
    }

    public function create(Request $request)
    {
        $dataValidated = $request->validate([
            'name' => 'required|min:5|max:500',
            'email' => 'required|min:5|max:500',
            'reason' => 'required|min:5|max:500',
            'beginning' => 'required|min:5|max:500',
            'finished' => 'required|min:5|max:500',
            'status' => 'required|min:5|max:50'
        ]);
        // dd($dataValidated);
        Holiday::create($dataValidated);
        $name = $request->input('name');
        $email = $request->input('email');
        $data = ['admin' => 'Admin', 'name' => $name, 'email' => $email];
        Mail::to('ceiforestudios87@gmail.com')->send(new TestMail($data));
        return back()->with('status', 'Solicitud creada con éxito');
    }

    public function edit(Holiday $holiday)
    {
        return view('admin.holiday-edit', ['holiday' => $holiday]);
    }

    public function update(Request $request, Holiday $holiday)
    {
        $dataValidated = $request->validate([
            'status' => 'required|min:5|max:50'
        ]);
        // Activar este codigo solo para probar en local... descomentarlo en produccion...
        $name = $request->input('name');
        $email = $request->input('email');
        $status = $request->input('status');
        $data = ['name' => $name, 'email' => $email, 'status' => $status];
        Mail::to($email)->send(new ResponseMail($data));
        $holiday->update($dataValidated);
        return back()->with('status', 'Solicitud actualizada con éxito');
    }

    public function destroy(Holiday $holiday)
    {
        // $holiday = Holiday::findOrFail($id);
        $holiday->delete();
        return back()->with('status', 'Solicitud eliminada con éxito');
    }

    public static function show()
    {
        $global['holidays'] = Holiday::all();
        return $global;
    }
}
