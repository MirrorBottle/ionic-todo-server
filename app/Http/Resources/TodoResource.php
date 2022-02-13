<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
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
            'id'           => $this->id,
            'lecture_id' => $this->lecture_id,
            'lecture_name' => $this->lecture->name,
            'deadline'     => $this->deadline->format('d M H:s'),
            'is_pass'      => $this->is_pass,
            'title'        => $this->title,
            'description'  => $this->description,
        ];
    }
}
