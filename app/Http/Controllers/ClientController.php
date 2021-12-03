<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Jobs\ProcessNotification;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param ClientRequest $request
     * @param $topic
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request, $topic): \Illuminate\Http\JsonResponse
    {
        ProcessNotification::dispatch([
            'topic' => $topic,
            'data' => $request->all()
        ]);
        return response()->json([
            'topic' => $topic,
            'data' => $request->all(),
            'message' => 'processing'
        ], Response::HTTP_OK);
    }
}
