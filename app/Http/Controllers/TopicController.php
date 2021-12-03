<?php

namespace App\Http\Controllers;

use App\Http\Requests\TopicRequest;
use App\Http\Resources\TopicResource;
use App\Models\Topic;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $topics = Topic::query()->paginate(10);
        return TopicResource::collection($topics);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TopicRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TopicRequest $request): \Illuminate\Http\JsonResponse
    {
        $topic = Topic::firstOrCreate([
            'name' => $request->input('name'),
            'slug' => \Str::slug($request->input('name'), '-')
        ]);

        return response()->json($topic->only(['name', 'slug']), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TopicRequest $request
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function update(TopicRequest $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
