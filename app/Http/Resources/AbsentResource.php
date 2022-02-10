<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AbsentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'date' => $this->date,
            'meeting' => $this->meeting,
            'lecture_id' => $this->lecture_id,
            'lecture_name' => $this->lecture->name,
            'user_name' => $this->user->name,
            'created_time' => $this->created_at->format('H:m'),
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }
}
