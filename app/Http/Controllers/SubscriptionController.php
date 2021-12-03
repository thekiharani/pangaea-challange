<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Http\Resources\SubscriptionResource;
use App\Models\Subscription;
use App\Models\Topic;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $subs = Subscription::query()->paginate('10');
        return SubscriptionResource::collection($subs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubscriptionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SubscriptionRequest $request, $topic): \Illuminate\Http\JsonResponse
    {
        $finder = Topic::firstWhere('slug', '=', $topic)->get();
        if (! $finder) {
            return response()->json([
                'success' => false,
                'error' => 'topic not found'
            ], Response::HTTP_NOT_FOUND);
        }
        $sub = Subscription::firstOrCreate([
            'topic' => $topic,
            'url' => $request->input('url')
        ]);

        return response()->json($sub->only(['url', 'topic']), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SubscriptionRequest $request
     * @param \App\Models\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriptionRequest $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
