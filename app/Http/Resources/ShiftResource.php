<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShiftResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'per_hour' => $this->per_hour . '$',
            'location' => $this->location,
            'status' => $this->status == 0 ? 'Pending' : ($this->status == 1 ? 'Approved' : 'Rejected'),
            'is_claimed' => $this->claimShift?->status == 'claimed' ? 'Claimed' : 'Pending',
        ];
    }
}
