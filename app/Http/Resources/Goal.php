<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Goal extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'user' => $this->user,
            'goalName' => $this->goalName,
            'goalDesc' => $this->goalDesc,
            'type' => $this->type,
            'startNumber' => $this->startNumber,
            'endNumber' => $this->endNumber,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
