<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AppointmentStoreRequest;
use App\Models\Appointment;
use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::query()->with(['service'])->where('status', 0)->get();

        return view('admin.pages.appointment.index', [
            'appointments' => $appointments
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment = Appointment::query()->find($id);

        return view('admin.pages.appointment.show', [
            'appointment' => $appointment
        ]);
    }
    
    public function store(AppointmentStoreRequest $request)
    {
        $appointmentDate = $request->input('appointment_date');
        $currentDateTime = now();

        if ($appointmentDate < $currentDateTime) {
            return redirect()->route('front.home')
                ->with('error', 'Geçmiş bir randevu tarihi seçemezsiniz.');
        }

       $appointment =  Appointment::create($request->all());

        $appointment->notify(new EmailNotification($appointment));

        return redirect()->route('front.home')
            ->with('success', 'Randevu Talebiniz Başarıyla Oluşturuldu');
    }


    public function changeStatus(Request $request)
    {
        $appointment = Appointment::query()->where('id', $request->appointmentID)->first();

        $appointment->status = 1;

        $appointment->save();

        return response()
            ->json([
                'status' => "success",
                "message" => "Başarılı",
                "data" => $appointment,
                "appointment_status" => $appointment->status
            ])
            ->setStatusCode(200);
    }

}
