<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class staffChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->setLabels(['A'])
            ->setDataset([40, 93, 35, 42, 18, 82])
            ->setDataset([70, 29, 77, 28, 55, 45])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
