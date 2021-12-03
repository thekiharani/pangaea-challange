<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulationController extends Controller
{
    /**
     * @param Request $request
     * @return void
     */
    public function students(Request $request)
    {
        \Log::channel('notifications')
            ->info(route('students.simulate'));
        \Log::channel('notifications')
            ->info(json_encode($request->data));
    }

    /**
     * @param Request $request
     * @return void
     */
    public function teachers(Request $request)
    {
        \Log::channel('notifications')
            ->info(route('teachers.simulate'));
        \Log::channel('notifications')
            ->info(json_encode($request->data));
    }

}
