<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'url' => $this->url,
            'topic' => $this->topic,
            'date_created' => $this->created_at->format('jS F, Y | g:i A T'),
            'last_updated' => $this->updated_at->diffForHumans(),
        ];
    }
}
