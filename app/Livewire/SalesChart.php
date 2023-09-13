<?php

namespace App\Livewire;

use App\Charts\MonthlyUsersChart;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart as FacadesLarapexChart;
use Khill\LarapexCharts\Facades\LarapexChart;

use Livewire\Component;


class SalesChart extends Component
{
    public function render(MonthlyUsersChart $chart)
    {
        return view('livewire.sales-chart', ['chart' => $chart->build()]);
    }
    
}
