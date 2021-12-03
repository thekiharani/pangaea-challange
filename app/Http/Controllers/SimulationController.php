<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulationController extends Controller
{
    /**
     * @param $data
     * @return void
     */
    public function students($data)
    {
        \Log::info($data);
    }

    /**
     * @param $data
     * @return void
     */
    public function teachers($data)
    {
        \Log::info($data);
    }

    /**
     * @param $data
     * @return void
     */
    public function catering($data)
    {
        \Log::info($data);
    }
}
