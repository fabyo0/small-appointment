<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $appointments = Appointment::query()->with(['service','doctor'])->get();
        $services = Service::all('id','title');
        $doctors = Doctor::all('id','title');

        return view('site.pages.home', [
            'appointments' => $appointments,
            'services' => $services,
            'doctors' => $doctors
        ]);
    }

    public function about()
    {
        return view('site.pages.about.index');
    }

    public function service()
    {
        return view('site.pages.services.index');
    }

    public function doctors()
    {
        return view('site.pages.employees.index');
    }

    public function blogs()
    {
        return view('site.pages.blogs.index');
    }

    public function contact()
    {
        return view('site.pages.contact.index');
    }

}
