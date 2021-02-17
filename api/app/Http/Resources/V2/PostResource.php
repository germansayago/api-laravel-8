<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'post_name' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'author' => [
                'name' => $this->user->name,
                'email' => $this->user->email
            ],
            'created_at' => $this->published_at,
        ];
    }
}
