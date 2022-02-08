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
            'user_id' => $this->user_id,
            'meeting' => $this->meeting,
            'date' => $this->date,
            'lecture_id' => $this->lecture_id,
            'lecture_name' => $this->lecture->name,
            'user_name' => $this->user->name,
        ];
    }
}
