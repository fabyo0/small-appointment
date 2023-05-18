<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $events = [];

        $appointments = Appointment::with(['service', 'doctor'])->get();

        foreach ($appointments as $appointment) {
            //TODO: calendar içerisindeki gösterilecek eventler
            $events[] = [
                'title' => 'Hasta :' . $appointment->fullname . ' ' .'Tedavi: ' . $appointment->service->title . ' - ' .'Doktor: ' .$appointment->doctor->title,
                //'start' => Carbon::parse($appointment->appointment_date)->translatedFormat('Y-m-d'),
                'start' => Carbon::parse($appointment->created_at)->translatedFormat('Y-m-d H:i'),
                 'end' =>  Carbon::parse($appointment->created_at)->addHour(),
                //allDay: false
            ];
        }
        return view('admin.pages.calendar.show', [
            'events' => $events
        ]);
    }
}
