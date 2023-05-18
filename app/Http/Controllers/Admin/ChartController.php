<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;


class ChartController extends Controller
{

    public function index()
    {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $appointments = Appointment::query()
            ->select(DB::raw('DATE(created_at) AS date'), DB::raw('COUNT(*) AS total'))
            ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->groupBy('date')
            ->get();

        $chartLabels = [];
        $chartData = [];

        foreach ($appointments as $appointment) {
            $chartLabels[] = Carbon::parse($appointment->date)->isoFormat('ddd');
            $chartData[] = $appointment->total;
        }

        $chart = (new LarapexChart)->setType('bar')
            ->setTitle('Günlük Randevu Sayısı')
            ->setXAxis($chartLabels)
            ->setDataset([
                [
                    'name' => 'Randevu',
                    'data' => $chartData
                ]
            ]);

        return view('admin.pages.index', [
            'chart' => $chart,
            'appointments' => $appointments
        ]);
    }

}
