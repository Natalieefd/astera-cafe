<?php

namespace App\Http\Controllers;

use App\Charts\staffChart;
use App\Models\menu;
use App\Models\staff;
use App\Models\User;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Illuminate\Http\Request;

class GrafikController extends Controller
{
    public function index(staffChart $chart){
        // $jabatanKasir = staff::where('jabatan','like',"%Kasir%")->count();
        // $jabatanBarista = staff::where('jabatan','like',"%Barista%")->count();
        // $jabatanWaiters = staff::where('jabatan','like',"%Waiters%")->count();

        $userConut = User::count();
        $menuCount = menu::count();
        $staffCount = staff::count();

        $chart = LarapexChart::setTitle('Astera Cafe Data')
            // ->setSubtitle('')
            ->setLabels(['User', 'Menu', 'Staff'])
            ->setDataset([$userConut, $menuCount, $staffCount]);

        return view('components.admin.grafik', compact('chart'));
    }
}
