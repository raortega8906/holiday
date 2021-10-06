<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHolidayRequest;
use App\Http\Requests\UpdateHolidayRequest;
use Mail;
use App\Mail\ResponseMail;
use App\Mail\TestMail;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function index()
    {
        if (!auth()->user()->is_admin) {
            $email = auth()->user()->email;
            $holidays = Holiday::orderBy('id', 'desc')->where('email', '=', $email)->paginate(10);

            return view('admin.admin', compact('holidays'));
        }

        $holidays = Holiday::orderBy('id', 'desc')->paginate(10);

        return view('admin.admin', compact('holidays'));
    }

    public function create(CreateHolidayRequest $request)
    {
        $holidays = $request->validated();
        $ini = strtotime($holidays['beginning']);
        $end = strtotime($holidays['finished']);

        if ($ini < $end) {
            auth()->user()->holidays()->create($holidays);
            $name = $holidays['name'];
            $email = $holidays['email'];
            $data = ['admin' => 'Admin', 'name' => $name, 'email' => $email];
            Mail::to('ceiforestudios87@gmail.com')->send(new TestMail($data));

            return back()->with('status', 'Solicitud creada con éxito');
        } else {

            return back()->with('status-error', 'La fecha de inicio de vacaciones no puede ser posterior o igual
            a la fecha final de vacaciones');
        }
    }

    public function show(Holiday $holiday)
    {
        return view('admin.holiday-show', compact('holiday'));
    }

    public function edit(Holiday $holiday)
    {
        return view('admin.holiday-edit', compact('holiday'));
    }

    public function update(UpdateHolidayRequest $request, Holiday $holiday)
    {
        $holidays = $request->validated();
        $status = $holidays['status'];

        if ($status != 'Esperando') {
            $holiday->update($holidays);
            $name = $holidays['name'];
            $email = $holidays['email'];
            $data = ['name' => $name, 'email' => $email, 'status' => $status];
            Mail::to($email)->send(new ResponseMail($data));

            return back()->with('status', 'Solicitud actualizada con éxito');
        } else {

            return back()->with('status-error', 'Solicitud sin respuesta');
        }
    }

    public function destroy(Holiday $holiday)
    {
        $holiday->delete();

        return back()->with('status', 'Solicitud eliminada con éxito');
    }

    public static function showHolidays()
    {
        $global['holidays'] = auth()->user()->holidays;

        return $global;
    }
}
