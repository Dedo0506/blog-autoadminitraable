<?php

namespace App\Charts;

use App\Models\Categoria;
use App\Models\Post;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $names[]= Categoria::pluck('name');

        /* $categorias = Categoria::query()->posts()->count();
        $posts = Post::count('categoria_id')
        ->groupBy('categoria_id')
        ->get();*/

        $num=Categoria::count(); 
        $numeros = [];

            for ($i = 0; $i < $num; $i++) {
                $numeros[] = mt_rand(1, 10);
            }

        return $this->chart->horizontalBarChart()
            ->setTitle('Los Angeles vs Miami.')
            ->setSubtitle('Wins during season 2021.')
            ->setColors(['#FFC107'])
            ->addData('Votos',$numeros)
            ->setXAxis($names);
    }
}



/* $catgs = Categoria::pluck('name')->toArray();

        $categorias = Categoria::all();
        $postXcate = [];

        foreach ($categorias as $categoria) {
            $cantidadPosts = $categoria->posts()->count();
            $postXcate[$categoria->name] = $cantidadPosts;
        }

        return $this->chart->horizontalBarChart()
        ->setTitle('Los Angeles vs Miami.')
        ->setSubtitle('Wins during season 2021.')
        ->setColors(['#FFC107', '#D32F2F'])
        ->addData('Votos', $postXcate)
        ->setXAxis($catgs); */